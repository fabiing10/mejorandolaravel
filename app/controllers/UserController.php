<?php


use HireMe\Entities\User;
use HireMe\Managers\RegisterManager;

class UserController extends BaseController{

    public function signUp(){
        return View::make('users/sign-up');
    }

    public function  register(){


      $manager = new RegisterManager($user, Input::all())git


        $validation = \Validator::make($data,$rules);

        if($validation->passes()){

            $user = new User($data);
            $user->type = 'candidate';
            $user->save();

            return Redirect::route('home');

        }

        return Redirect::back()->withInput()->withErrors($validation->messages());
    }
}