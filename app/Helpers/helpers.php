<?php

use App\Models\Link;

if (!function_exists('links')){
    function links(){
        return Link::latest()->limit(5)->get();
    }
}