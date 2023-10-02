<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function product(Request $request){
        $filter = $request->filter;
        $products = Product::all();
        
        if($filter){
            switch($filter)
            {
                case 'tour'         : $products = $products->where('type', Product::TYPE_TOUR); break;
                case 'akomodasi'    : $products = $products->where('type', Product::TYPE_ACCOMMODATION); break;
                case 'event'        : $products = $products->where('type', Product::TYPE_EVENT_ORGANIZER); break;
                case 'transportasi' : $products = $products->where('type', Product::TYPE_TRANSPORTATION); break;
                default             : break;
            }
        }
        return view('product', ['products' => $products]);
    }

    public function blog(){
        $posts = Post::all();

        return view('blog', ['posts' => $posts]);
    }

    public function contact(){
        return view('contact');
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
