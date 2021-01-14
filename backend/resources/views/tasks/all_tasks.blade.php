<div class="card mt-5">
    <div class="card-header">
        {{ __('tasks.currents_tasks') }}
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">
            <thead class="table-active">
            <th>
                {{ __('tasks.task_name') }}
            </th>
            <th>
                &nbsp;
            </th>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>

                    <td>
                        <form action="{{ url('task/' . $task->id) }}" method="POST">

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger ml-auto d-block">
                                <i class="fa fa-btn fa-trash mr-2"></i> {{ __('tasks.delete_task') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

