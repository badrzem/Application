<?php

namespace TS\UserBundle\Controller;

use TS\UserBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; 

class UserRestController extends Controller
{
  public function getUserAction($id){
    $user = $this->getDoctrine()->getRepository('TSUserBundle:User')->findOneById($id);
    if(null === $user){
      throw new NotFoundHttpException("Cet utilisateur n'existe pas.");
    }
    return $user;
  }
  
  public function getUsersAction(){
    $users = $this->getDoctrine()->getRepository('TSUserBundle:User')->findAll();
    if(null === $users){
      throw new NotFoundHttpException("Aucun utilisateur.");
    }
    return $users;
  }
  
  public function getContactsAction($id){
    $contacts = $this->getDoctrine()->getRepository('TSContactBundle:Contact')->findByUser($id);
    if(null === $contacts){
      throw new NotFoundHttpException("Aucun contact.");
    }
    return $contacts;
  }
}