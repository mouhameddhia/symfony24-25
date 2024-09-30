<?php

namespace App\Controller;

use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/showauthor/{name}', name: 'app_showauth')]
    public function showAuthor($name): Response
    {
        return $this->render('author/showauthor.html.twig', [
            'name' => $name, ]);
    }


    #[Route('/listauthors', name: 'listauthors')]
    public function listAuthors(): Response
    {

        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william_shakespeare.jpg','username' => ' William Shakespeare', 'email' =>  ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha-Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
            );

        return $this->render('author/list.html.twig',[
            'authors'=> $authors,
        ]);
                
    }


    #[Route('/authorDetails/{id}', name: 'app_authorDetails')]
    public function authorDetails($id): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william_shakespeare.jpg','username' => ' William Shakespeare', 'email' =>  ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha-Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
            );

            // Filtrer l'auteur par ID
    $author = array_filter($authors, function($author) use ($id) {
        return $author['id'] == $id;
    });

    // Récupérer le premier auteur trouvé (s'il existe)
    $author = reset($author); // Cela renvoie l'élément ou false si l'auteur n'est pas trouvé

    return $this->render('author/detailshow.html.twig', [
        'i' => $id,
        'author' => $author, // Passez l'auteur unique au template
    ]);
}
        
}
