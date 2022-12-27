<?php

namespace Albet\Asmvc\Core\Views;

use Albet\Asmvc\Core\Exceptions\DetailableException;

class ViewFileNotFoundException extends DetailableException
{
    public function __construct()
    {
        parent::__construct("Views file not found.");
    }

    public function getDetail(): string
    {
        return "Make sure you have your view file located in 'App/Views'.";
    }
}
