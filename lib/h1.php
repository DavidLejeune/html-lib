<?php

class H1
{
    protected $content = '';
    protected $tag = 'h1';

    public function __construct($content)
    {
        $this->content = $content;
        $this->tag = 'h1';

    }

    public function __toString()
    {
        return "<$this->tag>$this->content</$this->tag>";
    }



}