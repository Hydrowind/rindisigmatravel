<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;
use App\Models\User;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function product(Request $request){
        $products = Product::all();
        if(isset($request->filter)){
            switch($request->filter)
            {
                case Product::TYPE_TOUR                 : $products = $products->whereIn('type', [Product::TYPE_TOUR_DOMESTIC, Product::TYPE_TOUR_INTERNATIONAL]); break;
                case Product::TYPE_ACCOMMODATION        : $products = $products->where('type', Product::TYPE_ACCOMMODATION); break;
                case Product::TYPE_EVENT                : $products = $products->where('type', Product::TYPE_EVENT); break;
                case Product::TYPE_TRANSPORTATION       : $products = $products->where('type', Product::TYPE_TRANSPORTATION); break;
                case Product::TYPE_TOUR_DOMESTIC        : $products = $products->where('type', Product::TYPE_TOUR_DOMESTIC); break;
                case Product::TYPE_TOUR_INTERNATIONAL   : $products = $products->where('type', Product::TYPE_TOUR_INTERNATIONAL); break;
                default: $products = []; break;
            }
        }
        return view('product', ['products' => $products]);
    }

    public function blog(){
        $posts = Post::all();

        return view('blog', ['posts' => $posts]);
    }

    public function about(){
        return view('about', ["users" => User::all()]);
    }

    public function detail_product(Request $request, string $id){
        $data = Product::find($id);
        $interest = Product::where('type', Product::TYPE_TOUR)->inRandomOrder()->take(3)->get();

        return view('detail_product', [
            'data' => $data, 
            'interest' => $interest,
        ]);
    }

    public function detail_blog(Request $request, string $id){
        $data = Post::find($id);
        $interest = Post::inRandomOrder()->take(3)->get();

        return view('detail_blog', [
            'data' => $data, 
            'interest' => $interest,
        ]);
    }
}
