<?php



Route::get('/',function(){
    return Redirect::route('home.index');
});


    Route::get('login', ['as' => 'home.index', 'uses' => 'HomeController@getIndex']);
    Route::post('login', ['as'=>'user.index','uses' => 'HomeController@postIndex']);
    Route::get('user/create', [ 'as'=>'user.create','uses' => 'UsersController@create']);
    //Route::get('user', ['as' => 'books.index', 'uses' => 'UsersController@index']);


Route::group(array('before' => 'auth'), function()
{
    Route::get('user', ['as' => 'user.index', 'uses' => 'UsersController@index']);
    //Route::get('user/create', [ 'as'=>'user.create','uses' => 'UsersController@create']);
    Route::post('user', ['as' => 'user.store', 'uses' => 'UsersController@store']);
    Route::get('user/{id}', ['as' => 'user.show', 'uses' => 'UsersController@show']);
    Route::get('user/{id}/edit',['as'=>'user.edit', 'uses' => 'UsersController@edit']);
    Route::put('user/{id}',['as' => 'user.update', 'uses' => 'UsersController@update']);
    Route::get('user/{id}/delete', ['as' => 'user.destroy', 'uses' => 'UsersController@destroy']);


    Route::get('books', ['as' => 'books.index', 'uses' => 'BookController@index']);
    Route::get('books/create', [ 'as'=>'books.create','uses' => 'BookController@create']);
    Route::post('books', ['as' => 'books.store', 'uses' => 'BookController@store']);
    Route::get('books/{id}', ['as' => 'books.show', 'uses' => 'BookController@show']);
    Route::get('books/{id}/edit',['as'=>'books.edit', 'uses' => 'BookController@edit']);
    Route::put('books/{id}',['as' => 'books.update', 'uses' => 'BookController@update']);
    Route::get('books/{id}/delete', ['as' => 'books.destroy', 'uses' => 'BookController@destroy']);


    Route::get('logout', ['as' => 'logout', 'uses' => 'HomeController@logout']);

});









