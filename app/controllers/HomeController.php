<?php

class HomeController extends BaseController {

    public function getIndex()
    {
        //if user is in login mode then we'll not give him login page, if he logged out then he gets the page
        if(Auth::check()) return Redirect::route('user.index');
        return View::make('home.index');
    }

    /**
     * @return mixed
     *
     */
    public function postIndex()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::route('books.index');

        }

        return Redirect::back()->withInput()->with('message','Username And Password Combination Wrong');
    }

    public function getLogin()
    {
        return Redirect::route('/');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('home.index')->with('message','You have been logged out');
    }

}