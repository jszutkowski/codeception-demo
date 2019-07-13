<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Lib\ModuleContainer;

class Acceptance extends \Codeception\Module
{
	public function __construct(ModuleContainer $moduleContainer, array $config = null) {
		parent::__construct($moduleContainer, $config);
	}

}
