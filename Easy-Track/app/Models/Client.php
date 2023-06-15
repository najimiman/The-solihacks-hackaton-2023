<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table="clients";
    protected $fillable =[
        "id",
        "Name",
        "email",
        "Date_abonnement",
        "Adress",
        "numero_telephone",
        "Cin",
        "Code_client"
    ];
}
