<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usage_tips extends Model
{
    use HasFactory;
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "usage_tips";
    protected $primaryKey = "id";
    protected $fillable = [
        "title",
        "content"
    ];
}
