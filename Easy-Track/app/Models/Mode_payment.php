<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode_payment extends Model
{
    use HasFactory;
    protected $table="mode_payments";
    protected $fillable =[
        "id",
        "mode"
    ];
}
