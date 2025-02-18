<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description'];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public $timestamps = true;

    // Post Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormattedDateAttribute()
    {
        if ($this->created_at->isToday()) {
            return 'Today at ' . $this->created_at->format('h:i A');
        } elseif ($this->created_at->isYesterday()) {
            return 'Yesterday at ' . $this->created_at->format('h:i A');
        } elseif ($this->created_at->diffInDays(now()) <= 7) {
            return $this->created_at->diffForHumans();
        }
        return $this->created_at->format('d M Y, h:i A');
    }
}
