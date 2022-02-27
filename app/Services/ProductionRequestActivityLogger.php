<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Imobil;

class ProductionRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return ['ip' => $request->ip(), 'url' => $request->fullUrl()];
        
    }

    
}