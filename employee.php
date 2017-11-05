<?php
/**
 * Created by PhpStorm.
 * User: egrove
 * Date: 4/11/17
 * Time: 8:33 PM
 */

class profile
{
    var $name;
    function set_name($new_name) {
        $this->name = $new_name;
    }
    function get_name() {
        return $this->name;
    }
}