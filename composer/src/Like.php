<?php

namespace Xavi\Composer;

class Like{
    public function __construct(private User $user){}

    public function getUser(){
        return $this->user;
    }
}