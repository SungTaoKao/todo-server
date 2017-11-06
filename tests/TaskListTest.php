<?php

require_once '../application/models/Tasks.php';

class TaskListTest extends PHPUnit_Framework_TestCase
{
    private $tasks;

    public function setUp()
    {
        $this->tasks = (new Tasks())->all();
    }

    public function testUncompletedTaskList()
    {
        $count = count($this->tasks);

        $uncompletedTasks = 0;

        foreach ($this->tasks as $task) {
            if($task->status != 2)
            {
                $uncompletedTasks++;
            }
        }

        $this->assertGreaterThan($count - $uncompletedTasks, $uncompletedTasks);
    }
}