<?php
declare(strict_types=1); // setting up to be strictly typed

final class Email // final email
{
   private $email; // variable 

   private function __construct(string $email) // constructor method
   {
       $this->ensureIsValidEmail($email); //
       $this->email = $email; // string attached to variable
   }

   public static function fromString(string $email): self
   {
       return new self($email);
   }

   public function __toString(): string
   {
       return $this->email; // instance variable
   }
   // ensures email is valid
   private function ensureIsValidEmail(string $email): void  
   {
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // validates if email is a valid email
           throw new InvalidArgumentException(
               sprintf('"%s" is not a valid email address',$email) // if not, prints message
           );
       }
   }
}
