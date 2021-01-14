<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    // У задач может быть только один пользователь
    public function user() {
        return $this->belongsTo(User::class);
    }
}
