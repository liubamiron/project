<?php

namespace App\Models;

interface LoggableInterface
{
    // Get Loggable unique name for message generation
    // return string

   
    public function convertToLoggableString():string;


    public function convertToTestString():string;

    // public function convertToApartmentString():string;

    // Get loggable object data for log context
    // Get loggable object data for log context
    // return array
    public function getData(): array;

}