<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 */
class Task extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     *  У задач может быть только один пользователь
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
