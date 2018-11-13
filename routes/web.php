<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/




$router->get('/', function ()  {
    return 'hello';
});



// get view  version 5.1 
// $router->get('/StoreBooks', function ()  {
//     return view('StoreBooks');},'Bookcontroller@store');
// $router->get('/Users', function ()  {
//     return view('Users');
// });
// $router->get('/Book', function ()  {
//     return view('Book');
// });







$router->get('/Users','Usercontroller@index');

$router->post('/CreateUsers','Usercontroller@createUser');

$router->put('/UpdateUsers/{id}','Usercontroller@updateUser');

$router->delete('/DeleteUsers/{id}','Usercontroller@deleteUser');
// API Book Get,    Poste, Put , Delete 

$router->get('/Book','Bookcontroller@index');

$router->post('/CreateBook','Bookcontroller@createBook');

$router->put('/UpdateBook/{id}','Bookcontroller@updateBook');

$router->delete('/DeleteBook/{id}','Bookcontroller@deleteBook');

// API BookBorrow Get,    Poste, Put , Delete 

$router->get('/BookBorrow','BookBorrowcontroller@index');

$router->post('/CreateBookBorrow','BookBorrowcontroller@createBookBorrow');

$router->put('/UpdateBookBorrow/{id}','BookBorrowcontroller@updateBookBorrow');

$router->delete('/DeleteBookBorrow/{id}','BookBorrowcontroller@deleteBookBorrow');


