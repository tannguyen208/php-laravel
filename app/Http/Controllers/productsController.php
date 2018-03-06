<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\productsModel;

class productsController extends Controller
{
    public function index() {
        # $products = productsModel::paginate(5);

        # ->paginate(5) => 5 product 1 page
        # ->setPath('url')  => set url customer http://localhost/.../url
        $products = productsModel::where('id','>=','8')->paginate(5);
        return view('components\productsView',['products'=>$products]);
    }
}
