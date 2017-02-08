<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panier;

class PanierController extends Controller
{
    public function getData (){
     $fruit=Panier::all();
     return view('table', ['fruit'=>$fruit]);
   }

   public function getAdd ($id){
   	$fruit=Panier::find($id);
   	$fruit->stock++;
   	$fruit->save();
   	return back();
   }

   public function getDown ($id){
	$fruit=Panier::find($id);
	$fruit->stock--;
	$fruit->save();
	return back();
   }

   public function show(){

   	return view('form');
   
}
}
