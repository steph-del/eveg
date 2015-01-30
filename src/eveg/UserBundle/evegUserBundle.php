<?php

namespace eveg\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class evegUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
