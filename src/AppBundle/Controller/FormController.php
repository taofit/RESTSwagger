<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of FormController
 *
 * @author tao
 */
class FormController extends Controller {
    /**
     * @Route("/onefiorm", name="have fun")
     */
    public function newAction() {
        return new Response("I can change it now johnny" );
//        $task = new Task();
//        $task->setTask("Write a blog post");
//        $task->setDueDate(new \DateTime('tomorrow'));
//        
//        $form = $this->createFormBuilder($task)
//                ->add('task', TextType::class)
//                ->add('dueDate', DateType::class)
//                ->add('save', SubmitType::class, array('label' => 'create Post'))
//                ->getForm();
//        return $this->render('lucky/newTask.html.twig', array('form' => $form->createView()));
    }
}
