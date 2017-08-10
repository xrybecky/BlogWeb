<?php

/**
 * Created by PhpStorm.
 * User: rybec
 * Date: 03.08.2017
 * Time: 15:18
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    public $blogs;

    /**
     * Home constructor.
     */
    public function __construct()
    {
        $this->blogs = $this->prepareBlogs();

    }

    public function prepareBlogs(){

        return Blogs::all();
    }
}