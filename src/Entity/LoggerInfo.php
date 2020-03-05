<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Monolog\Handler\BrowserConsoleHandler;
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
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function index(LoggerInterface $logger)
    {
        $logger->pushHandler(new BrowserConsoleHandler(Logger::INFO));
        $logger->info('info after');
        echo 'here';

    }

}
