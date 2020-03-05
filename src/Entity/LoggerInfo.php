<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Monolog\Handler\BrowserConsoleHandler as BrowserConsoleHandlerAlias;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

/*
$logInfo = new Logger('info');

$logInfo->pushHandler(new StreamHandler(__DIR__ . '/logs/blue.log', Logger::INFO));*/

/*$logInfo->pushHandler(new BrowserConsoleHandler());
$logInfo->info('INFO (200): Interesting events. Examples: User logs in, SQL logs. ' . $message);*/

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoggerInfoRepository")
 */
class LoggerInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function getLogger(string $input){

        $logger = new Logger("info");
        $logger->pushHandler(new StreamHandler(__DIR__ . '/logs/info.log', Logger::INFO));
        $logger->pushHandler(new BrowserConsoleHandlerAlias());
        $logger->info($input);

    }
}
