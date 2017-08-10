<?php

use App\Models\Blogs;
use App\Models\Home;

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

$app->get('/', function () use ($app) {
    $home = Home::query()->findOrFail(1);
    return view('modules.home', ['home' => $home]);
});

$app->get('/blog', function () use ($app){
    return view('blog');
});

$app->get('/blog/{id}', ['as' => 'blog', function ($id) use ($app){

    $blog = Blogs::query()->findOrFail($id);
    return view('modules.blog', ['blog' => $blog]);
}]);