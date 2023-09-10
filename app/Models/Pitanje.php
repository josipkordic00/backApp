<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitanje extends Model
{
    use HasFactory;

    protected $table = 'pitanja';

    protected $fillable = ['pitanje', 'odgovor'];
}