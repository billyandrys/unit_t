<?php

/*
 * .
 */

namespace unit_t;

/**
 * Description of AcessHandler
 *
 * @author BillyAndrys
 */
class AcessHandler
{
    public static function check($role){
        return "admin"=== $role;        
    }
            
}
