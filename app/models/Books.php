<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Books extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';


    public static $rules = array(
        'bname' => 'required',
        'bauthor' => 'required',
        'bedition' => 'required',

    );


    //protected $hidden = array('password', 'remember_token');
    /*public function getFullName()
    {
        return $this->name;
    }*/
}
