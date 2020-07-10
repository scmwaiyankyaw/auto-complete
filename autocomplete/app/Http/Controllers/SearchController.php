<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class SearchController extends Controller
{
    public function index(){
      return view('search');
    }

    public function autocomplete(Request $request){
      $data = Item::select('name')
              ->where ('name','like',"%{{$request->input('query')}}%")
              ->get();
      return response()->json($data);
    }
}
