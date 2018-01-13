<?php

namespace Demo\Employee\Demo\Employee\Controller;

use Demo\Core\Controller\AddressController;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddressControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType( \Demo\Core\Controller\AddressController::class);
    }
}
