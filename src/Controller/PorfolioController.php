<?php

namespace App\Controller;

use App\Notification\EmailNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PorfolioController  extends AbstractController
{
    private EmailNotifier $notifier;

    public function __construct(EmailNotifier $notifier)
    {
        $this->notifier = $notifier;
    }

    #[Route('/')]
    public function uril(){
        return $this->redirectToRoute('about');
    }

    #[Route('/about',name:'about')]
    public function about(){
        return $this->render('my_infos/about.html.twig',[
            'accueil' => true
        ]);
    }

    #[Route('/portfolio',name:'portfolio')]
    public function portfolio(){
//        $ministere = $this->PAVService->getMinistereActeur($this->getUser()->getActeur());
//        $this->notifier->notifyEnvoiInspecteur($ministere);
//        die();
        return $this->render('my_infos/portfolio.html.twig',[
            'accueil' => true
        ]);
    }

    #[Route('/resume',name:'resume')]
    public function resume(){
        return $this->render('my_infos/resume.html.twig',[
            'accueil' => true
        ]);
    }

    #[Route('/blog',name:'blog')]
    public function blog(){
        return $this->render('my_infos/blog.html.twig',[
            'accueil' => true
        ]);
    }

    #[Route('/contact',name:'contact')]
    public function contact(){
//        $ministere = $this->PAVService->getMinistereActeur($this->getUser()->getActeur());
//        $this->notifier->notifyEnvoiInspecteur($ministere);
//        die();
        return $this->render('my_infos/contact.html.twig',[
            'accueil' => true
        ]);
    }
}