<?php

namespace event;


class vendor_category
{
    var $cat_name;
    var $cat_desc;
    var $cat_file;

    function disp(){
        echo "$this->cat_name <br>";
        echo "$this->cat_desc <br>";
        echo "$this->cat_file <br>";

    }
}