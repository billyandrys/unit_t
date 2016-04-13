<?php

use unit_t\AcessHandler;

/**
 * Description of AcessHandlerTest
 *
 * @author BillyAndrys
 */
class AcessHandlerTest extends PHPUnit_Framework_TestCase
{
    public function test_grant_access()
    {
      $this->assertTrue(AcessHandler::check("admin"));
    }
}
