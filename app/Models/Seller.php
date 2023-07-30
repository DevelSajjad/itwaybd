<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'user_id', 'phone', 'email', 'business', 'city', 'zip_code', 'address'
    ];
}
