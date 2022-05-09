<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agents extends Model
{
    use HasFactory;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "agents";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "location",
        "phone"
    ];
}
