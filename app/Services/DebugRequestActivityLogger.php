<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\LoggableInterface;
use App\Models\Imobil;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {        
    return ['ip'=> $request->ip(), 'url'=>$request->fullUrl(), 'method'=>$request->method(), 'token is'=>$request->bearerToken()];
    }
    
    
}