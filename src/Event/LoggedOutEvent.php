<?php

namespace Contributte\Events\Bridges\Security\Event;

use Contributte\Events\Bridges\Security\AbstractSecurityEvent;
use Nette\Security\User;

/**
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
class LoggedOutEvent extends AbstractSecurityEvent
{

	const NAME = SecurityEvents::ON_LOGGED_OUT;

	/** @var User */
	private $user;

	/**
	 * @param User $user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * @return User
	 */
	public function getUser()
	{
		return $this->user;
	}

}
