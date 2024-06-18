<?php

use App\Models\Link;
use App\Models\OfficeSetting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('links')){
    function links(){
        return Link::latest()->limit(5)->get();
    }
}
if (!function_exists('officeSetting')) {
    function officeSetting()
    {
        return Cache::rememberForever('office_setting', function () {
            return OfficeSetting::with('informationofficer', 'officehead','spokePerson')->latest()->first();
        });
    }
}
