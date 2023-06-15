<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_abonement extends Model
{
    use HasFactory;
    protected $table="type_abonements";
    protected $fillable =[
        "id",
        "prix",
        "nom"
    ];}
