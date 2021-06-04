<?php

namespace SolarSystem;

use PHPUnit\Framework\TestCase;
require 'models/Identity.php';

class IdentityTest extends TestCase
{
    public function testCanHydrateFromExistingValue()
    {
        $id = new Identity("44260076-3856-46ed-88d5-9946c093e6d7");

        $this->assertInstanceOf(Identity::class, $id);
        $this->assertEquals("44260076-3856-46ed-88d5-9946c093e6d7", (string) $id);
    }

    public function testItMustBeOfValidUuid4Format()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid UUID string: monkey');

        new Identity("monkey");
    }
}