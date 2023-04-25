<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'ingredients', 'description', 'author_id', 'slug'];

    protected $casts = [
        'ingredients' => 'json',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($recipe) {
            $recipe->slug = Str::slug($recipe->title);
            $count = 2;
            while (static::whereSlug($recipe->slug)->exists()) {
                $recipe->slug = Str::slug($recipe->title) . '-' . $count++;
            }
            error_log('New slug generated: ' . $recipe->slug);
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
