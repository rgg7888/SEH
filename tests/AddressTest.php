<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Address;

class AddressTest extends TestCase
{
    public function test_create_a_address()
    {
        $address = new Address;

        $this->assertEquals("<address ></address>", $address->tag());

        $address2 = new Address("Cclase", "Soy un address");

        $this->assertEquals(
            "<address class=\"clase\">Soy un address</address>", 
            $address2->tag()
        );

    }
}