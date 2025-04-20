<?php

namespace App\Models;

class User
{
    protected $id;
    protected $firstName;
    protected $lastName;

    public function getId()
    {
        return $this->id;
    }
}