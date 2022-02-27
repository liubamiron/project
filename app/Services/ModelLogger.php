<?php

namespace App\Services;

use App\Models\LoggableInterface;
use App\Models\User;
use Psr\Log\LoggerInterface;
use App\Services\ProductionRequestActivityLogger;


class ModelLogger
{
    use UserRepresentationTrait;

    

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)

    {
        $this->logger = $logger;
    }

    public function logModel(?User $user, LoggableInterface $loggable): void
    {


        $this->logger->info(

            $this->identifyUserRepresentation($user) . ' accesed ' . $loggable->convertToLoggableString(),
            $loggable->getData(),

        );
    }

    //  use logModelItem->send log

    // public function logModelItem(?User $user, LoggableInterface $loggable): void
    // {


    //     $this->logger->info(

    //         $this->identifyUserRepresentation($user) . ' accesed ' . $loggable->convertToTestString(),
    //         $loggable->getData(),

    //     );
    // }


}
