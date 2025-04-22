<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    public $timestamps = true;
    protected $table = "Anggota";
    // protected $fillable = ['nama','hp'];
    protected $guarded = ['id'];
}
