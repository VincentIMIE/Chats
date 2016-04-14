<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function chatAction() {

        $em = $this->getDoctrine()->getManager();
        $chats = $this->getDoctrine()->getRepository("AppBundle:Chat")->findAll();

        return $this->render('default/index.html.twig', array('chats' =>   $chats));
    }
    
    /**
     * @Route("/miaule/{id}", name="miaule")
     */
    public function miaule($id=0){
        $em = $this->getDoctrine()->getManager();
        $chat = $this->getDoctrine()->getRepository("AppBundle:Chat")->find($id); 

        return $this->render('default/index3.html.twig', array('chat' => $chat));
    }
    /**
     * @Route("/mange/{id}", name="mange")
     */
    public function mangeCroquettes($id=0){
        $em = $this->getDoctrine()->getManager();
        $chat = $this->getDoctrine()->getRepository("AppBundle:Chat")->find($id); 

        return $this->render('default/index2.html.twig', array('chat' => $chat));
    }
}
