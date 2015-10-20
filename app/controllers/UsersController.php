<?php

class UsersController extends BaseController {

    //protected $layout = 'layouts.master';

    /**
    public function __construct()
    {
        $this->beforeFilter('auth');
    }


     * Display a listing of the user.
     *
     * @return Response
     */

    public function index()
    {
        $user = User::all();

       // $user->orderBy('username','asc'->get();
        return View::make('user.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */

    public function create()
    {
        return View::make('user.create');
    }



    public function store()
    {
        // validate
/**
        $rules = array(
            'username' =>'required|min:5|unique:users',
            'name'       => 'required',
            'email'      => 'required|email',
            'phone' => 'required|numeric',
            'password'=>'required|min:4'
        );
        $validator = Validator::make(Input::all(), $rules);
*/

        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
        } else {
            $user = new User;
            $user->name  = Input::get('name');
            $user->username   = Input::get('username');
            $user->email      = Input::get('email');
            $user->phone = Input::get('phone');
            $user->password   = Hash::make(Input::get('password'));
            $user->phone  = Input::get('phone');
            $user->save();

            // redirect
            //Session::flash('message', 'Successfully created!');
           // return Redirect::route('user.index');
            return Redirect::route('user.index')->with('message', 'Successfully created!');
        }
    }





    public function edit($id)
    {
        $user = User::find($id);

        return View::make('user.edit')->with('user',$user);
    }



    public function update($id)
    {

        $validator = Validator::make(Input::all(), User::$rules);


        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
        } else {
            $user = User::find($id);
            $user->username   = Input::get('username');
            $user->email      = Input::get('email');
            $user->name = Input::get('name');
            $user->password   = Hash::make(Input::get('password'));
            $user->phone  = Input::get('phone');
           // $user->phone  = Input::file('image');

            $user->save();

            Session::flash('message', 'Successfully updated !');
            return Redirect::route('user.index');
        }
    }



    public function show($id)
    {
            $user = User::find($id);

            return View::make('user.show')->with('user',$user);
    }


   /** public function destroy($id)
    {
        User::destroy($id);

        return Redirect::route('user.index');
    }*/

    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();

        return Redirect::route('user.index');
    }



}
