<?php

include_once 'AccountStrategyAbstract.php';
include_once 'AccountFactory.php';
include_once 'MailSender.php';

class PerformerStrategy extends AccountStrategyAbstract
{
	public function create($userName, $name, $email)
	{
		$accountFactory = new AccountFactory();

		$accountObject = $accountFactory->make('Performer');

		$this->subscribeObservers($accountObject);

		// Temporary we don't want to send remote mail to yahoo users about creation:
		if(stristr($email, '@yahoo') !== FALSE)
		{
			$this->unSubscribeObserver($accountObject);
		}

		$accountObject->create($userName, $name, $email);
	}

	public function unSubscribeObserver(SubjectAbstract $accountObject)
	{
		$mailSender = new MailSender();

		$accountObject->unSubscribeObserver($mailSender);
	}
}
