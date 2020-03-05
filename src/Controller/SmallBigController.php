<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\LoggerInfo;
use App\Entity\SpacesToDashes;
use Monolog\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SmallBigController extends AbstractController
{
    private $userInput;
    private $capitalize ;
    private $spaces ;

    /**
     * @Route("/", name="small_big")
     */
    public function index()
    {

        $capitalize = new Capitalize ;
        $spaces = new SpacesToDashes;

        if(isset($_POST['change'])){

            $logInfo = new Logger('info');
            $log = new LoggerInfo();
            $log->index($logInfo);

           /* $capitalize = new Capitalize($_POST['userInput'] ?? "");
            $spaces = new SpacesToDashes($_POST['userInput'] ?? "");*/
        }


        return $this->render('small_big/index.html.twig', [
            'newWorld' => $capitalize->transform($_POST['userInput'] ?? ""),
            'spacestodashes' => $spaces->transform($_POST['userInput'] ?? ""),
        ]);
    }

}
