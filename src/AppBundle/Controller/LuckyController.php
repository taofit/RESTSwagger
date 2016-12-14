<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;
/**
 * Description of LuckyController
 *
 * @author tao
 */
class LuckyController extends Controller {
    
    /**
     * @Route("/luckydip/number/{max}")
     */
    public function indexAction($max) {
        $number = mt_rand(0, $max) * 34;
        $myarr = array();
        for ($i = 0; $i < 10; $i++) {
            $myarr[] = $i * 23;
        }
        return $this->render("lucky/number.html.twig", 
                        array('number' => $number, 'pageTitle' => "what is the title", 'nameIt'=> $myarr));
    }
    /**
     * @Route("/anotherLuck/{numberme}", name="link_me")
     */
    public function secondAction($numberme) {
        return new Response("<html><body>Lucky number is: ". $numberme ."</body></html>");
    }
    /**
     * @Route("/createpost", name="create_post")
     */
    public function createMeAction() {
        $post = new Post();
        $post->setName('first man\'s business');
        $post->setCity('Long city stad');
        $post->setAddress("Östra Hamngatan 7B, 371 83 Karlskrona, organisationsnummer 212000-0829");
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        return new Response('Saved post with id: ' . $post->getId());
    }
    /**
     * @Route("/listpost/{postId}", name="list everything")
     */
    public function showAction($postId) {
//        $em = new EntityManager();
//        $query = $em->createQuery(
//                'SELECT p FROM AppBundle:Post p'
//                );
        return new Response("list is as below:" . $postId);
    }
    /**
     * @Route("/havsdform", name="juhoew")
     */
    public function newAction() {
        return new Response("just list is as below:" );
    }
    /**
     * @Route("/havesomething", name="jukulnew")
     */
    public function funnyAction() {
        return new Response("--000---just kul as above:" );
    }
}
