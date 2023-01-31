<?php

namespace Xavi\Composer\utils;

class Uuid{
    

    // Methods
    public static function generate(){
        return uniqid();
    }
}