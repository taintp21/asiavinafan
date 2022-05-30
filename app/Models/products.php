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
        "publicId_cloudinary",
        "technical_specifications",
        "featured",
        "switch_height",
        "thermal_fuse_protection",
        "price"
    ];
    public function category(){
        return $this->belongsTo(categories::class);
    }
}
