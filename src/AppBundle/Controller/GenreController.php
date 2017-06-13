<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Genre controller.
 *
 * @Route("genre")
 */
class GenreController extends Controller {

    /**
     * Lists all genre entities.
     *
     * @Route("/", name="genre_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $genres = $em->getRepository('AppBundle:Genre')->findAll();

        return $this->render('genre/index.html.twig', array(
                    'genres' => $genres,
        ));
    }

    /**
     * Finds and displays a genre entity.
     *
     * @Route("/{name}", name="genre_show")
     * @Method("GET")
     */
    public function showAction(Genre $genre) {

        $this->denyAccessUnlessGranted($genre->getRole(), null, 'Unable to access this page!');
        return $this->render('genre/show.html.twig', array(
                    'genre' => $genre,
        ));
    }

}
