<?php
declare(strict_types=1); // setting up to be strictly typed

use PHPUnit\Framework\TestCase; // php is in vendor 
require __DIR__ . '/../src/Email.php'; // requires email from email.php

final class EmailTest extends TestCase
{
    // test for valid email
   public function testCanBeCreatedFromValidEmailAddress(): void
   {
       $this->assertInstanceOf( 
           Email::class,
           Email::fromString('user@example.com') 
       );
   }
   // test from invalid email 
   public function testCannotBeCreatedFromInvalidEmailAddress(): void
   {
       $this->expectException(InvalidArgumentException::class);
       Email::fromString('invalid'); // error for invalid email = invalid
   }
   // testing toString method from email.php
   public function testCanBeUsedAsString(): void
   {
       $this->assertEquals(  // testing string 
           'user@example.com',
           Email::fromString('user@example.com') // testing to class
       );
   }
}
