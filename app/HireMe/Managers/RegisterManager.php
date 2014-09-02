<?php
/**
 * Created by PhpStorm.
 * User: FabianDeveloper
 * Date: 9/1/14
 * Time: 7:08 PM
 */

namespace HireMe\Managers;


class RegisterManager extends BaseManager{

    public function getRules(){

        $rules = [
            'full_name' => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        return $rules;
    }


} 