<?php

// src/eveg/AppBundle/CatCode/exception/evegCatCodeException.php

namespace eveg\AppBundle\Utils\CatCode\Exception;

class evegCatCodeException extends \Exception{
	
	public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
	
}