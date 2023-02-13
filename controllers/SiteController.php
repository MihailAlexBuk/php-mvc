<?php

namespace app\controllers;

use boomee\phpmvc\Application;
use boomee\phpmvc\Controller;
use boomee\phpmvc\Request;
use boomee\phpmvc\Response;
use app\models\ContactForm;

class SiteController extends Controller
{

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost()) {
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact,
        ]);
    }

    public function home()
    {
        $params = [
            'name' => '123'
        ];

        return $this->render('home', $params);
    }

}