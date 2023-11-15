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
    public $incrementing = false;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo {
        return $this->belongsTo(User::class, 'category_id', 'id');
    }
}
