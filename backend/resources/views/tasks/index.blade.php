@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('tasks.task_header') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>
                            {{ __('You are logged in!') }}
                        </p>

                        <form action="{{ url('task') }}"
                              method="POST"
                              class="form-horizontal mt-5">
                        {{ csrf_field() }}

                            <div class="form-group">
                                <label for="task-name"
                                       class="col-sm-3 control-label">
                                    {{ __('tasks.task_name') }}
                                </label>

                                <div class="col-sm-6">
                                    <input type="text"
                                           name="name"
                                           id="task-name"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default border border-dark">
                                        <i class="fa fa-plus"></i>
                                        {{ __('tasks.add_task') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
