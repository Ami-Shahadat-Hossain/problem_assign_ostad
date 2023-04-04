<?php
class Person
{
    private $name;
    private $email;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
}
$person = new Person();

$person->setName("ami_shahadat");
$person->setEmail("user@gmail.com");

echo $person->getName();
echo PHP_EOL;
echo $person->getEmail();

