<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /** @var string todo_type */
    const IMPORTANT_TODO = 'important';
    const WARNING_TODO = 'warning';
    const PRIMARY_TODO = 'primary';
    const SUCCESS_TODO = 'success';
    const INFO_TODO = 'info';
    const DEFAULT_TODO = 'default';

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function scopeSorted($query)
    {
        ////SELECT * FROM `todos` WHERE user_id = 1 order by sort asc, id asc
        return $query->orderBy('sort', 'asc')->orderBy('id', 'asc');
    }

    public function scopeNotCompleted($query)
    {
        return $query->where('status', 0);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 1);
    }
}
