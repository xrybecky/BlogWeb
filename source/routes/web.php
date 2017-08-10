<?php

use App\Models\Blogs;

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
    return $app->version();
});

$app->get('/blog', function () use ($app){
    return view('blog');
});

$app->get('/blog/{id}', function ($id) use ($app){

    $blog = Blogs::query()->findOrFail($id);
    return view('modules.blog', ['blog' => $blog]);
});