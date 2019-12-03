<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function prueba(){
        return view('pages.prueba');
    }
    public function nosotros(){
        return view('pages.nosotros');
    }
    public function galeria(){
        return view('pages.galeria');
    }
    public function citas(){
        return view('pages.citas');
    }
    public function petshop(){
        //Muestra los productos que tienen el estado PUBLICADO
        $products = Product::where('status','PUBLISHED')
                ->orderBy('id','ASC')->get();
        return view('pages.petshop',compact('products'));
    }
    public function contactanos(){
        return view('pages.contactanos');
    }
}
