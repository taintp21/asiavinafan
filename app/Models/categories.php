<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class categories extends Model
{
    use HasFactory;
    use MediaAlly;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'slug', 'images', 'publicId_cloudinary'
    ];

    public function products(){
        return $this->hasMany(products::class);
    }
}
