<?php

require_once("Element.php");

class DIV extends Element
{
    public function __construct($content)
    {
        parent::__construct($content);
        $this->tag = 'div';
    }
}
