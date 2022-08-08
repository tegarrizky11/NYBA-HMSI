<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:backup {type=all} {--current=1}  {--users=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database using iseed';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $arg_type = $this->argument('type');
        $opt_users = $this->option('users');
        // backup migrasi database sebelumnya
        if ($this->option('current') == 1) {
            // pindahkan folder dulu
            $folder_parent = 'backup';
            $folder_backup = date('Y-m-d');

            if (!file_exists("./$folder_parent")) echo shell_exec('mkdir ' . $folder_parent);
            if (!file_exists("./$folder_parent/$folder_backup")) echo shell_exec('cd ' . $folder_parent . ' && mkdir ' . $folder_backup);

            shell_exec('cp -R ./database/seeders/* ./' . $folder_parent . '/' . $folder_backup);
            echo 'Berhasil backup data sebelumnya' . PHP_EOL;
        }


        $tables =  [
            'artikel' => [
                'artikel',
                'artikel_tag',
                'artikel_kategori',
                'artikel_tag_item',
                'artikel_kategori_item'
            ],
            'galeri' => [
                'galeri',
                'galeri_tag_member'
            ],
            'pengurus' => [
                'pengurus_periode',
                'pengurus_periode_jabatan',
                'pengurus_periode_jabatan_member',
                'pengurus_periode_member',
            ],
            'profile' => [
                'pengurus_profile_kontak',
                'pengurus_profile_kontak_tipe',
                'pengurus_profile_pendidikan',
                'pengurus_profile_pendidikan_jenis',
                'pengurus_profile_pengalaman_lain',
                'pengurus_profile_pengalaman_organisasi'
            ],
            'frontend' => [
                'social_media',
                'contacts',
                'footer_instagrams',
                'username_validations',
                'galeri_tag_member',
            ],
            'pendaftaran' => [
                'pendaftarans',
                'pend_sensus',
                'g_forms'
            ],
            'permissions' => [
                'p_model_has_permissions',
                'p_model_has_roles',
                'p_permissions',
                'p_roles',
                'p_role_has_permissions',
                'p_menu',
                'p_role_has_menu'
            ],
            'utility' => [
                'notif_depan_atas',
            ],
        ];
        if ($opt_users == 1 || $arg_type == 'users') echo shell_exec('php artisan iseed users --force');
        foreach ($tables as $k => $t) {
            $type = $arg_type == 'all' ? $tables[$k] : ($k == $arg_type ? $t : []);
            foreach ($type as $table) {
                echo shell_exec('php artisan iseed ' . $table . ' --force');
            }

            if (in_array($arg_type, $t)) {
                echo shell_exec('php artisan iseed ' . $arg_type . ' --force');
            }
        }
        return 1;
    }
}