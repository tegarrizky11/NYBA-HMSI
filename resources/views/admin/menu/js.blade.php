{{-- nestable --}}
<script src="https://cdn.jsdelivr.net/npm/nestable2@1.6.0/dist/jquery.nestable.min.js"></script>
{{-- sweetalert --}}
<script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
{{-- loading --}}
<script src="{{ asset('assets/templates/admin/plugins/loading/loadingoverlay.min.js') }}"></script>
{{-- select2 --}}
<script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>
{{-- icon --}}
<script>
    let isUpdate = false;
    let sequence_max = 0;
    $(document).ready(function() {
        $('#route').select2({
            dropdownParent: $('#menu-form'),
        });

        $('#type').select2({
            dropdownParent: $('#menu-form'),
        });

        $('#roles').select2({
            dropdownParent: $('#menu-form'),
        });

        $('#active').select2({
            dropdownParent: $('#menu-form'),
        });

        $('#parent_id').select2({
            ajax: {
                url: `{{ route("$prefix.parent_list") }}`,
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: function(params) {
                    var query = {
                        search: params.term,
                    }
                    return query;
                }
            },
            dropdownParent: $('#menu-form'),
        });

        $('.tree-tools').on('click', function(e) {
            var action = $(this).data('action');
            if (action === 'expand') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#menu-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('sequence', sequence_max++);
            setBtnLoading('#btn-save', 'Save Changes');
            resetErrorAfterInput();
            const route = isUpdate ? `{{ route("$prefix.update") }}` : `{{ route("$prefix.insert") }}`;
            $.ajax({
                type: 'POST',
                url: route,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data saved successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    menu();
                },
                error: function(data) {
                    const res = data.responseJSON ?? {};
                    errorAfterInput = [];
                    for (const property in res.errors) {
                        errorAfterInput.push(property);
                        setErrorAfterInput(res.errors[property], `#${property}`);
                    }
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res.message ?? 'Something went wrong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                complete: function() {
                    setBtnLoading('#btn-save',
                        '<li class="fa fa-save mr-1"></li> Save changes',
                        false);
                }
            });
        });
    })

    function menu() {
        $('#card-menu').LoadingOverlay("show");
        $.ajax({
            url: `{{ route($prefix . '.list') }}`,
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if ($('#menu').html() != '') $('.dd').nestable('destroy');
                $('.dd').nestable({
                    maxDepth: 2,
                    json: response.data,
                    contentCallback: (item) => {
                        sequence_max = Number(item.sequence) > Number(sequence_max) ?
                            Number(item.sequence) : Number(sequence_max);
                        return `<i class="${item.icon}"></i>&nbsp;<strong>${item.title}${item.type == 0 ? ' | <span class="text-danger">separator</span>' : ''}</strong> ${item.type == 0 || item.route == null ? '' : `<a href="${item.url}" class="dd-nodrag">${item.route}</a>`}
                            <span class="float-end dd-nodrag">
                                <button onclick="edit(${item.id})" class="btn btn-primary btn-sm"><span class="fe fe-edit"></span></button>
                                <button onclick="deleteFun(${item.id})" class="btn btn-danger btn-sm"><span class="fa fa-fw fa-trash"></span></button>
                            </span>`;
                    }
                });
                isEdit(false)
            },
            complete: function() {
                $('#card-menu').LoadingOverlay("hide");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal.fire("!Opps ", "Something went wrong, try again later", "error");
            }
        });
    }
    menu();

    function save() {
        $.LoadingOverlay("hide");
        var serialize = $('#menu').nestable('toArray');
        $.ajax({
            url: `{{ route($prefix . '.save') }}`,
            type: 'PUT',
            data: {
                data: serialize
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function() {
                $.LoadingOverlay("hide");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal.fire("!Opps ", "Something went wrong, try again later", "error");
            }
        });
    }

    function edit(id) {
        $.LoadingOverlay("show");
        $.ajax({
            type: "GET",
            url: `{{ route($prefix . '.find') }}`,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id
            },
            success: (d) => {
                isEdit(true);
                const data = d.data;
                const menu = data.menu;
                $('#id').val(menu.id);
                $('#parent_id')
                    .append((new Option((menu.parent ?? "ROOT"), (menu.parent_id ?? 0), true, true)))
                    .trigger('change');
                $('#active').val(menu.active).trigger('change');
                $('#icon').val(menu.icon);
                $('#title').val(menu.title);
                $('#route').val(menu.route).trigger('change');
                $('#type').val(menu.type).trigger('change');
                $('#roles').val(data.roles.map(e => e.text)).trigger('change');
            },
            error: function(data) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function() {
                $.LoadingOverlay("hide");
            }
        });
    }

    function isEdit(edit) {
        const title = $('#menu-title');
        const btn_cancel = $('#menu-btn-cancel');
        if (edit) {
            isUpdate = true;

            // edit attribute
            title.html('Edit Menu');
            btn_cancel.fadeIn();
        } else {
            isUpdate = false;
            $('#id').val(menu.id);
            $('#parent_id')
                .append((new Option("ROOT", 0, true, true)))
                .trigger('change');
            $('#active').val(1).trigger('change');
            $('#type').val(1).trigger('change');
            $('#icon').val('');
            $('#title').val('');
            $('#route').val('').trigger('change');
            $('#roles').val('').trigger('change');

            // edit attribute
            title.html('Add Menu');
            btn_cancel.fadeOut();
        }
    }

    function deleteFun(id) {
        swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to proceed ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url: `{{ url($prefix_uri) }}/${id}`,
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        swal.fire({
                            title: 'Please Wait..!',
                            text: 'Is working..',
                            onOpen: function() {
                                Swal.showLoading()
                            }
                        })
                    },
                    success: function(data) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Data saved successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        menu();
                    },
                    complete: function() {
                        swal.hideLoading();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        swal.hideLoading();
                        swal.fire("!Opps ", "Something went wrong, try again later", "error");
                    }
                });
            }
        });
    }
</script>
