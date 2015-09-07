<?php

include_once 'AccountStrategyInterface.php';
include_once 'TaskMaker.php';
include_once 'MailSender.php';

abstract class AccountStrategyAbstract implements AccountStrategyInterface
{
	abstract public function create($userName, $name, $email);

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
}