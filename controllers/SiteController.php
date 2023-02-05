<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{

    public function handleContact()
    {
        return 'post data';
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function home()
    {
        $params = [
            'name' => '123'
        ];

        return $this->render('home', $params);
    }

}