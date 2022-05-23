<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotions extends Model
{
    use HasFactory;
    protected $table = "promotions";
    protected $primaryKey = "id";
    protected $fillable = [
        "title", "image", "publicId_cloudinary", "short_content", "content", "sale", "userId", "created_at", "updated_at"
    ];
}
