<?php

include_once 'AccountFactory.php';
include_once 'TaskMaker.php';
include_once 'MailSender.php';

$accountFactory = new AccountFactory();
$taskMaker      = new TaskMaker();
$mailSender     = new MailSender();

/* ----------------------------Performer */

$accountObject = $accountFactory->make('Performer');
$accountObject->subscribeObserver($taskMaker);
$accountObject->subscribeObserver($mailSender);

$accountObject->create('Pista', 'Kiss Pista', 'pista@google.com');

//$accountObject->unSubscribeObserver($mailSender);

$accountObject->create('Eva', 'Nagy Eva', 'eva@yahoo.com');

/* ----------------------------Studio */

$accountObject = $accountFactory->make('Studio');
$accountObject->subscribeObserver($taskMaker);

$accountObject->create('OptimusPrajm', 'Optimus geza', 'optimus@google.com');

/* ----------------------------Member */

$accountObject = $accountFactory->make('Member');
$accountObject->subscribeObserver($mailSender);

$accountObject->create('Gigamember', 'John Doe', 'jd@google.com');


