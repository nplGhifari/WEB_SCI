<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    // Gabungkan semua field yang boleh diisi dalam satu array $fillable
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Mutator untuk otomatis membuat slug saat nama diisi
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}