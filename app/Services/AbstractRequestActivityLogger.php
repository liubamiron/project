<?php

namespace App\Services;

use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;
use App\Services\UserRepresentationTrait;

abstract class AbstractRequestActivityLogger implements RequestActivityLoggerInterface
{
     use UserRepresentationTrait;

    private LoggerInterface $logger;

     public function __construct(LoggerInterface $logger)
     {
         $this->logger = $logger;
     }

    public function logRequest(Request $request, string $type):void
    {
        $this->logger->debug(
            $this->identifyUserRepresentation($request->user()) . 'made a request to' . $type,
            $this->collectRequestData($request)

        );
    }
     abstract protected function collectRequestData(Request $request): array;   
}