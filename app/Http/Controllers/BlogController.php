<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class Blog {  
     public $name; 
     public $content; 
     public $date_at; 
     public $image;
     public $note;
    };

class BlogController extends Controller
{

   public function index(){
    
   $listart = Article::all();
    
    return view('index', [
        'blogs' => $listart
    ]);
   }

   public function newarticle(){
    return view('newart');
   }

   public function store(Request $request){
    
    $fields = $request -> validate([
        'name' => ['required','string'],
        'user' => ['required','string'],
        'description' => ['required','string'],
        'image' => ['required','string'],
    ]);

    
    
     Article::create([
        'user' => $fields['user'],
        'description' => $fields['description'],
        'name' => $fields['name'],
        'image' => $fields['image'],
      ]);

      dd('creer');
   }

}
