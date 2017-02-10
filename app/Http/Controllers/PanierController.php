<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panier;

class PanierController extends Controller
{
	public function index (){
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
		return redirect('/products');
	}

	public function getNew(){
		return view('products/new');
	}

	public function postInfo(Request $request){
		Panier::create($request->all());
		return redirect()->action('PanierController@index');
	}

	public function deleteProduct($id){
		$user=Panier::find($id);
		$user-> delete();

		return back();
	}


}
