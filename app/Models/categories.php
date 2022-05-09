<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'slug',
        'images'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
