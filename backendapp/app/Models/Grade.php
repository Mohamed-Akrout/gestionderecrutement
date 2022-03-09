<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['grade','experience','diplome','ecole_lisence','ecole_ingenieurie','ecole_master','competence_ingenieure','competence_consultant',];
}
