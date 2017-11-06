<?php

require_once '../application/models/Task.php';

class TaskListTest extends PHPUnit_Framework_TestCase
{
    private $CI;

    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
    }

    public function testUncompletedTaskList()
    {

    }
}