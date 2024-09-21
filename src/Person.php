<?php
namespace Dang\DemoFranken;
class Person
{
    public function __construct(private int $age, private string $name)
    {
    }

    public function __get(string $name): mixed
    {
        // Check if the property exists
        if (property_exists($this, $name)) {
            // Return the value of the property
            return $this->$name;
        }

        // Handle the case where the property does not exist
        return "Property '$name' does not exist.";
    }

    public function greeting(): void
    {
        echo "Hello $this->name. You are $this->age years old. \n";
    }
}
