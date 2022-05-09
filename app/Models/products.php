<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        "cateId",
        "name",
        "images",
        "technical_specifications",
        "switch_height",
        "thermal_fuse_protection",
        "price"
    ];
}