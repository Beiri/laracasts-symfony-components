<?php

require 'vendor/autoload.php';

use App\Events\UserBecameForeverSubscriber;
use App\Listeners\SendThankYouEmail;
use Symfony\Component\EventDispatcher\EventDispatcher;

// Service provider
$dispatcher = new EventDispatcher();

// EventServiceProvider
$listener = new SendThankYouEmail();
$dispatcher->addListener(UserBecameForeverSubscriber::class, [$listener, 'handle']);

// The part od the controller where you upgrade the user to forever.
$event = new UserBecameForeverSubscriber((object) ['name' => 'Samantha']);
$dispatcher->dispatch($event, UserBecameForeverSubscriber::class);
