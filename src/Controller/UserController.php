<?php

namespace App\Controller;

use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Sodium\add;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */

    public function register(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('username')
            ->add('password', RepeatedType::class, [
                'type'=>PasswordType::class,
            ]);
        return $this -> render( user/'index.html.twig',
            'name => $name');
    }
}
