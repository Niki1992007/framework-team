<?php

namespace App\Repositories;

use App\User;

/**
 * Class TaskRepository
 * @package App\Repositories
 */
class TaskRepository
{
    /**
     * @param  User  $user
     * @return Collection
     *
     * Получить все задачи текущего пользователя
     */
    public function forUser(User $user)
    {
        // Вернуть по дате создания и отсортировать
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
