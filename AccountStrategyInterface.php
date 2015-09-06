<?php

interface AccountStrategyInterface
{
	public function create($userName, $name, $email);
	public function subscribeObservers(SubjectAbstract $accountObject);
	public function subscribeTaskObservers(SubjectAbstract $accountObject);
	public function subscribeMailObservers(SubjectAbstract $accountObject);
}
