<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $table="factures";
    protected $fillable =[
        "id",
        "Code_client",
        "Client_id",
        "Date_facture",
        "services_id",
        "mode_payment_id"
    ];
}
