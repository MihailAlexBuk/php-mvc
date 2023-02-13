<?php

namespace app\controllers;

use boomee\phpmvc\Application;
use boomee\phpmvc\Controller;
use boomee\phpmvc\middlewares\AuthMiddleware;
use boomee\phpmvc\Request;
use boomee\phpmvc\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if($request->isPost())
        {
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login())
            {
                $response->redirect("/");
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('auth/login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');

        $user = new User();
        if($request->isPost())
        {
            $user->loadData($request->getBody());
            if($user->validate() && $user->save())
            {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
            }

            return $this->render('auth/register', [
                'model' => $user
            ]);
        }
        return $this->render('auth/register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile');
    }



}