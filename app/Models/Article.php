<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter(Builder $query): void {

        $query->when( $filters['search'] ?? false, fn($query, $search)=>
            $query->where('title', 'like', '%' . $search . '%')
        );
        
    }
}
