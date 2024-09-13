<?php

namespace App\Http\Controllers;

use App\Models\EarlyPurchase;
use App\Models\News;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index(){
        $news = News::all();
        $sale = Sale::all();
        $searchlist = Product::all();
        $early_purchase= EarlyPurchase::all();
        return view('welcome', [
            'news'=>$news,
            'sale'=>$sale,
            'searchlist'=>$searchlist,
            'early_purchase'=>$early_purchase,
        ]);   
    }
}
