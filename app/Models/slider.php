<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "slider";
    protected $primaryKey = "id";
    protected $fillable = [
        "images",
        "title"
    ];
}
