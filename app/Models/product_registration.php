<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_registration extends Model
{
    use HasFactory;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = 'product_registration';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_type', 'serial_number', 'name', 'address', 'phone_number', 'email'
    ];
}
