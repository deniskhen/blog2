<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

//PHP docs
/**
 * @property string $title
 * @property string $content
 * @property string $description
 * @property string $is_published
 * @method static create(array $array)
 */

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
      'description',
      'is_published',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, foreignKey: 'post_id', localKey: 'id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
