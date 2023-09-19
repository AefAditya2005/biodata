<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StafM extends Model
{
    use HasFactory;
    protected $table = "staf";
    protected $fillable = ["id","nip", "namalengkap","mapel"];
}
