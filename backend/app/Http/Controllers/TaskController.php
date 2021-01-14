<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * @var TaskRepository
     */
    protected $allTasks;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->allTasks = $tasks;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Получить все задачи текущего пользователя при помощи метода forUser репозитория TaskRepository
        return view('tasks.index', [
            'tasks' => $this->allTasks->forUser($request->user()),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Валидация имени задачи
        $this->validate($request, [
            'name' => 'required|max:250'
        ]);
        // Создание задачи
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect(route('index_tasks_page'));
    }

    /**
     * @param Request $request
     * @param Task $task
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Request $request, Task $task)
    {
        // Задействование политики перед удалением задачи
        $this->authorize('destroy', $task);
        $task->delete();

        return redirect('/tasks');
    }
}
