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
}
