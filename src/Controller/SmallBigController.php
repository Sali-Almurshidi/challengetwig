<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\LoggerInfo;
use App\Entity\Master;
use App\Entity\Nothing;
use App\Entity\SpacesToDashes;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SmallBigController extends AbstractController
{
    private $userInput = "";
    private $master ;
    private $firstShow = "" ;
    private $makeObject = "";

    /**
     * @Route("/", name="small_big")
     */
    public function index()
    {

        $logger = new LoggerInfo();

        if (!isset($_POST['dropDown'])){
            $this->firstShow = "choose from the list";

        } elseif ($_POST['dropDown'] == 'changeSize') {
            $master = new Master(new Capitalize());
            $this->userInput = $_POST['userInput'];
            $this->makeObject = $master->transform($this->userInput);
            $logger->getLogger($this->userInput);

        } elseif ($_POST['dropDown'] == 'changSpaces') {
            $master = new Master(new SpacesToDashes());
            $this->userInput = $_POST['userInput'];
            $this->makeObject = $master->transform($this->userInput);
            $logger->getLogger($this->userInput);
        }

        return $this->render('small_big/index.html.twig', [
            'newWorld' => $this->makeObject,
            'firstShow' => $this->firstShow,
        ]);
    }


}
