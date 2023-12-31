<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasUuids;

    protected $primaryKey = "id";
    protected $keyType = "string";
    protected $guarded = ['id'];
    public $incrementing = false;

    public function getExcerptAttribute()
    {
        $string = str_replace(['<p>', '</p>', '<div>', '</div>', '<br>'], '', $this->content);
        if (strlen($string) > 50) {
            $string = substr($string, 0, 100) . '...';
        }
        return $string;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
