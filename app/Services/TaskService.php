<?php
namespace App\Services;

use App\Repositories\TaskRepository;

class TaskService
{
    public function __construct(
        protected TaskRepository $taskRepository
    ) {}

    public function getAllTasks(int $userId)
    {
        return $this->taskRepository->getAllByUser($userId);
    }

    public function getTask(int $id, int $userId)
    {
        return $this->taskRepository->findByIdAndUser($id, $userId);
    }

    public function createTask(array $data, int $userId)
    {
        $data['user_id'] = $userId;
        return $this->taskRepository->create($data);
    }

    public function updateTask(int $id, int $userId, array $data)
    {
        return $this->taskRepository->update($id, $userId, $data);
    }

    public function deleteTask(int $id, int $userId)
    {
        return $this->taskRepository->delete($id, $userId);
    }
}
