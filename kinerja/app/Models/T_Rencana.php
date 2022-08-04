<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Rencana extends Model
{
    use HasFactory;
    protected $table ='t_rencana';
    // protected $fillable = ['nip, nama, dll']
    protected $guarded = [];
}
