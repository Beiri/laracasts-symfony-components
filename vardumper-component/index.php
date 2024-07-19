<?php

require('vendor/autoload.php');

class Tasks
{
    protected $tasks;

    public function __construct($tasks)
    {
        $this->$tasks = $tasks;
    }
}

class Task
{
    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

$tasks = new Task([
    new Task('Go to the store'),
    new Task('Finish this screencast'),
    new Task('Destroy that guy who keeps spamming the forum with Korean Casino links.')
]);

dump($tasks);
