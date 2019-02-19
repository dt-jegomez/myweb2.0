<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
class IndexController extends Controller
{
    public function index()
    {
        SEO::setTitle('Juan Eduardo Gómez');
        SEO::setDescription('Pagina de web del ingeniero de sistemas Juan Eduardo Gómez Gómez');
        SEO::opengraph()->setUrl('http://juangomez.gridsoft.co');
        SEO::setCanonical('http://juangomez.gridsoft.co');
        SEO::opengraph()->addProperty('type', 'articles');
        return view('index');
    }
}
