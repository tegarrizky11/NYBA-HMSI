<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'icon',
        'url',
        'order',
        'keterangan',
        'status',
    ];
    protected $primaryKey = 'id';
    protected $table = 'contact_list';
    const tableName = 'contact_list';
}
