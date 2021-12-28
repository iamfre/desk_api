<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TasksResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TasksController extends Controller
{
    public function index()
    {
        return TasksResource::collection(Task::get());
    }

    public function store(TaskRequest $request)
    {
        $new_task = Task::create($request->validated());

        return new TasksResource($new_task);
    }

    public function show(Task $task)
    {
        return new TasksResource($task);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return new TasksResource($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
