<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */


    public static $rules = array(
        'username' =>'required|min:5|unique:users',
        'name'       => 'required',
        'email'      => 'required|email',
        'phone' => 'required|numeric',
        'password'=>'required|min:4|confirmed',
        'password_confirmation' =>'required|min:4'
    );


    protected $table = 'users';


    protected $hidden = array('password', 'remember_token');
    /*public function getFullName()
    {
        return $this->name;
    }*/



}


