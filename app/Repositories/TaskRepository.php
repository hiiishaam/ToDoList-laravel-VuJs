<?php
namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    public function getAllByUser(int $userId)
    {
        return Task::where('user_id', $userId)->get();
    }

    public function findByIdAndUser(int $id, int $userId)
    {
        return Task::where('id', $id)->where('user_id', $userId)->firstOrFail();
    }

    public function create(array $data)
    {
        return Task::create($data);
    }

    public function update(int $id, int $userId, array $data)
    {
        $task = $this->findByIdAndUser($id, $userId);
        $task->update($data);
        return $task;
    }

    public function delete(int $id, int $userId)
    {
        $task = $this->findByIdAndUser($id, $userId);
        $task->delete();
        return $task;
    }
}
