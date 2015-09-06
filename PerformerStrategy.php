<?php

include_once 'AccountStrategyInterface.php';
include_once 'AccountFactory.php';
include_once 'TaskMaker.php';
include_once 'MailSender.php';

class PerformerStrategy implements AccountStrategyInterface
{
	public function create($userName, $name, $email)
	{
		$accountFactory = new AccountFactory();

		$accountObject = $accountFactory->make('Performer');

		$this->subscribeObservers($accountObject);

		// Temporary we don't want to send remote mail to yahoo users about creation:
		$this->unSubscribeObserver($accountObject);

		$accountObject->create($userName, $name, $email);
	}

	public function subscribeObservers(SubjectAbstract $accountObject)
	{
		$this->subscribeTaskObservers($accountObject);
		$this->subscribeMailObservers($accountObject);
	}

	public function subscribeTaskObservers(SubjectAbstract $accountObject)
	{
		$taskMaker = new TaskMaker();

		$accountObject->subscribeObserver($taskMaker);
	}

	public function subscribeMailObservers(SubjectAbstract $accountObject)
	{
		$mailSender = new MailSender();

		$accountObject->subscribeObserver($mailSender);
	}

	public function unSubscribeObserver(SubjectAbstract $accountObject)
	{
		$mailSender = new MailSender();

		$accountObject->unSubscribeObserver($mailSender);
	}
}
