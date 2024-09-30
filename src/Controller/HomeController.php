<?php 
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController{

 #[Route('/home', name:'home')]
//#[Route('/service', name:'app_service')]

public function index (){

    return new Response('<html><body><h1>Hello World</h1></body></html>');
    /*return $this->render('Service/index.html.twing', [
        'controller_name' => 'ServiceController',
    ]);
*/

}



}