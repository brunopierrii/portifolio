<?php

namespace App\Controller;

use PhpParser\Node\Stmt\Else_;
use PhpParser\Node\Stmt\Return_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetosController extends AbstractController
{
    /**
     * @Route("/projetos", name="app_projetos")
     */
    public function index(): Response
    {
        return $this->render('projetos/projetos.html.twig', [
            'controller_name' => 'ProjetosController',
        ]);
    }

    /**
     * @Route("/projetos/calculadora", name="app_calculadora")
     */
    public function calculadora()
    {
        
        $resultado = 0;
        
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
            $num1 = trim($_POST['num1']);
            $num2 = trim($_POST['num2']);
            $operacao = trim($_POST['operacao']);
            
            if($operacao == '+'){
                $resultado = $num1 + $num2;
            }elseif($operacao == '-'){
                $resultado = $num1 - $num2;
            }elseif($operacao == '*'){
                $resultado = $num1 - $num2;
            }elseif ($operacao == '/'){
                $resultado = $num1 / $num2;
            }
            
        }

        return $this->render('projetos/calculadora.html.twig',[
            'resultado' => $resultado
        ]);

    }

    /**
     * @Route("/projetos/agenda", name="app_agenda")
     */
    public function agenda()
    {
        return $this->render('projetos/agenda.html.twig',[
            'agenda' => 'Agenda'
        ]);
    }
}
