<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "img",
        "role"
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
