<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {


        $this->get('session')->set('limit', 5);
        $this->get('session')->set('offset', 0);

        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('AppBundle:Book')->fetch($this->get('session')->get('limit'));

        return $this->render('default/book_list.html.twig', array(
                    'books' => $books,
        ));
    }

    /**
     * @Route("/load-books", name="load_books")
     */
    public function loadBooksAction(Request $request) {

        $limit = $this->get('session')->get('limit');
        $offset = $this->get('session')->get('offset') + $limit;

        $this->get('session')->set('limit', $limit);
        $this->get('session')->set('offset', $offset);

        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('AppBundle:Book')->fetch($limit, $offset);
        $c = $this->render('default/book_list_json.html.twig', array(
            'books' => $books,
        ));

        $a = array('content' => $c->getContent());
        return $this->json($a);
    }

}
