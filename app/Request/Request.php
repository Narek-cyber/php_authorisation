<?php
namespace App\Request;

class Request
{
    public function all()
    {
        return $_REQUEST;
    }

    public function input($key)
    {
        return $this->all()[$key] ?? null;
    }
}