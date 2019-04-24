<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set and encrypt the password attribute.
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function todos()
    {
        //return $this->hasMany(Todo::class, "user_id", "id")->orderBy('sort');
        return $this->hasMany(Todo::class, "user_id", "id");
    }

    public function notes()
    {
        return $this->hasMany(Note::class, "user_id", "id");
    }

    public function incomes()
    {
        return $this->hasMany(Income::class, "user_id", "id");
    }

    public function workdays()
    {
        return $this->hasMany(WorkDay::class, "user_id", "id");
    }
}
