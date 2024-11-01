<?php

namespace App\Livewire;

use Livewire\Component;

class TaskList extends Component
{

    public $tasks = [
        'task1' => [
            'title' => 'Number 10',
            'time' => '4h',
            'description' => 'Blog and social posts',
            'status' => 'Deadline is today',
        ],
        'task2' => [
            'title' => 'Grace Aroma',
            'time' => '7d',
            'description' => 'New campaign review',
            'status' => 'New feedback',
        ],
        'task3' => [
            'title' => 'Petz App',
            'time' => '2h',
            'description' => 'Cross-platform and browser QA',
            'status' => '',
        ],
    ];

    public function render()
    {
        return view('livewire.task-list');
    }
}
