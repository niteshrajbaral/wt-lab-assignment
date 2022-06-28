<?php

if (!function_exists('dd')){
    function dd($data){
       dump($data);
       die(); 
    }
}
if(!function_exists('dumb')){

    function dumb($data){

        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
}