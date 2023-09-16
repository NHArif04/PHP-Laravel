<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction():string{
        return "Hello Laravel from DemoController";
    }
    
    function GetInfo(Request $request):string{      //object name can be any -> this is from url
        $name = $request->name;
        $age = $request->age;
        return "My name is {$name} and age is ${age}";   //${variableName}  or {$variableName}
    }

    function GetJSON(Request $getJSON):array{   //return type => array -> direct return json  
        /* 
        $name = $getJSON->name;
        $age = $getJSON->age;
        return "My name is {$name} and age is {$age}";   //return type should be string
        */
        
        /* 
        $name = $getJSON->input('name');
        $age = $getJSON->input('age');
        return "My name is {$name} and age is {$age}";
        */

        return $getJSON->input();       //return type should be array
    }
}
