<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'portugues', 'matematica', 'biologia', 'fisica', 'quimica', 'artes', 'educacaofisica', 'ingles', 'filosofia', 'geografia', 'historia', 'sociologia'];
}
