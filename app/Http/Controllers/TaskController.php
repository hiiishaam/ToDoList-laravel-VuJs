<?php
namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;

class TaskController extends Controller
{
    public function __construct(
        protected TaskService $taskService
    ) {}

    public function index(Request $request): JsonResponse
    {
        try {
            $tasks = $this->taskService->getAllTasks($request->user()->id);
            return response()->json($tasks);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch tasks',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function store(Request $request): JsonResponse
    {
        try {
            $task = $this->taskService->createTask($request->all(), $request->user()->id);
            return response()->json($task, 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create task',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Request $request, int $id): JsonResponse
    {
        try {
            $task = $this->taskService->getTask($id, $request->user()->id);
            if (!$task) {
                return response()->json(['error' => 'Task not found'], 404);
            }
            return response()->json($task);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to fetch task',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, int $id): JsonResponse
    {
        try {
            $task = $this->taskService->updateTask($id, $request->user()->id, $request->all());
            if (!$task) {
                return response()->json(['error' => 'Task not found or not updated'], 404);
            }
            return response()->json($task);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update task',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Request $request, int $id): JsonResponse
    {
        try {
            $deleted = $this->taskService->deleteTask($id, $request->user()->id);
            if (!$deleted) {
                return response()->json(['error' => 'Task not found or not deleted'], 404);
            }
            return response()->noContent();
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete task',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
