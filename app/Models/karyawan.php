<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table ="'table_absensikaryawan";
    protected $PrimaryKey = 'id_karyawan';
    protected $guarded = [''];
    protected $KeyType = "string";
}
