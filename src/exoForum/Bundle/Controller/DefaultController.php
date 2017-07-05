<?php

namespace exoForum\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('exoForumBundle:Default:index.html.twig');
    }
}
