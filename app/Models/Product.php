<?php

namespace App\Models;

use App\Casts\SlugCast;
use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'slud',
        'title',
        'brand_id',
        'price',
        'thumbnail',
    ];

    /*
    protected $casts = [
        'slug' => SlugCast::class
    ];
    */

    public function brand(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }


    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
