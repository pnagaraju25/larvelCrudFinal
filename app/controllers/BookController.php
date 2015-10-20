<?php

class BookController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth');
}


    public function index()
    {
        $book = Books::all();

        return View::make('books.index')->with('books',$book);
    }


    public function create()
    {
        return View::make('books.create');
    }



    public function store()
    {
        $validator = Validator::make(Input::all(), Books::$rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            $books = new Books;
            $books->bname = Input::get('bname');
            $books->bauthor = Input::get('bauthor');
            $books->bedition = Input::get('bedition');
            $books->phone  = Input::file('image');
            $books->save();

            return Redirect::route('books.index');
        }
    }



     public function edit($id)
     {
            $books = Books::find($id);

            return View::make('books.edit')->with('books',$books);
     }



    public function update($id)
    {

        $validator = Validator::make(Input::all(), Books::$rules);


        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);

       }

        else {
            $books = Books::find($id);
            $books->bname = Input::get('bname');
            $books->bauthor = Input::get('bauthor');
            $books->bedition = Input::get('bedition');
            $books->p_url = Input::get('p_url');
           // $books->phone  = Input::file('image');
            $books->save();

            return Redirect::route('books.index');
        }
    }


    public function show($id)
    {
        $books = Books::find($id);
        return View::make('books.show')->with('books', $books);
    }



    public function destroy($id)
    {
        $books= Books::find($id);
        $books->delete();

        return Redirect::route('books.index');
    }



}
