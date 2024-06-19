<?php

namespace App\Http\Controllers;

use Framework\Support\Controller;

class ExampleControllers extends Controller
{
    public function actionExample(): void
    {
        $attributo = 'Tela de visualização';
        $this->render('example.index', $attributo);
    }
}
