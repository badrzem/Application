<?php

namespace TS\ContactBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Security\Core\Exception\AccessDeniedException; 
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; 
use TS\ContactBundle\Entity\Contact;
use TS\ContactBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TSContactBundle:Default:index.html.twig');
    }
    
    public function accueilAction(){
        $user = $this->getUser();
        $id = $user->getId();
        
        $nbc = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSContactBundle:Contact')
                ->getNumberContact($id);
        $nbh = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSContactBundle:Contact')
                ->getHommeContact($id);
        $nbf = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSContactBundle:Contact')
                ->getFemmeContact($id);
        return $this->render('TSContactBundle:Default:accueil.html.twig', array(
			'nbc' =>$nbc,'nbh'=>$nbh,'nbf'=>$nbf));
    }
    
    public function nouveaucontactAction(Request $request){
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			throw new AccessDeniedException('Vous devez être connecté pour ajouter un contact !!');
		}
		
		$contact = new Contact();
		
		$user = $this->getUser();
		
		$form = $this->createForm(new ContactType(), $contact);
		
		if($form->handleRequest($request)->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($contact);
			
			$contact->setUser($user);
			
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Contact ajouté avec succés');

			return $this->redirect($this->generateUrl('ts_contact_nouveau_contact'));
		}

		return $this->render('TSContactBundle:Default:nouveaucontact.html.twig', array(
			'form' =>$form->createView()
		));
    }
    
    public function affichercontactAction(Request $request,$id){
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('Vous devez être connecté pour afficher un contact !!');
        }
        $contact = $this->getDoctrine()->getManager()->getRepository('TSContactBundle:Contact')->find($id);
        if (null === $contact) { throw new NotFoundHttpException("Ce contact n'existe plus."); }
        $form = $this->createForm(new ContactType(), $contact);
		
		if($form->handleRequest($request)->isValid()) {
			$em = $this->getDoctrine()->getManager();
			
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Contact modifé avec succés');

			return $this->redirect($this->generateUrl('ts_contact_afficher_contact',array('id'=>$id)));
		}
        return $this->render('TSContactBundle:Default:affichercontact.html.twig', array(
			'contact' =>$contact,'form' =>$form->createView()
		));
    }
    
    public function listercontactAction(){
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('Vous devez être connecté pour lister les contact !!');
        }
        $user = $this->getUser();
        $contacts = $this->getDoctrine()->getManager()->getRepository('TSContactBundle:Contact')->findByUser($user);
        return $this->render('TSContactBundle:Default:listercontact.html.twig', array(
			'contacts' =>$contacts
		));
    }
    
    public function supprimercontactAction(Request $request, $id)
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                throw new AccessDeniedException('Vous devez être connecté pour supprimer un contact !!');
        }

        $contact = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSContactBundle:Contact')
                ->find($id)
        ;

        if (null === $contact) {
                throw new NotFoundHttpException("Ce contact n'existe pas.");
        }

        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($contact);
                $em->flush();
                return $this->redirect($this->generateUrl('ts_contact_lister_contact'));
        }
		
        return $this->render('TSContactBundle:default:deletecontact.html.twig', array(
			'contact' => $contact,
			'form' =>$form->createView()
			));
    }
}
