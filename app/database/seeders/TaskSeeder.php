<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create(['title' => 'Sample Task 1']);
        Task::create(['title' => 'Sample Task 2']);
    }
}