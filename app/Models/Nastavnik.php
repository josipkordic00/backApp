<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nastavnik extends Model
{
    use HasFactory;

    protected $table = 'nastavnici';

    protected $fillable = ['ime', 'email', 'lozinka'];
}
