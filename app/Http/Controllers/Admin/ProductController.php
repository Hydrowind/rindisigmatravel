<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', ['data' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Product();

        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->itinerary = $request->get('itinerary');
        $data->term_condition = $request->get('term_condition');
        $data->price = $request->get('price');
        $data->min_guest = $request->get('min_guest');
        $data->duration = $request->get('duration');
        $data->type = $request->get('type');
        // $data->region = $request->get('region');

        // if($request->hasFile('cover_image')){
        //     $file = $request->file('cover_image');
        //     $filename = date("YmdHis") . '.' . $file->getClientOriginalExtension();
        //     $file->move('uploads', $filename);
        //     $data->cover_image = '/uploads/' . $filename;
        // }

        if($data->save()){
            return redirect()->route('product.index');
        } else {
            return back()->withInput(Input::all());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.product.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.edit', ['data' => Product::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Product::find($id);

        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->itinerary = $request->get('itinerary');
        $data->term_condition = $request->get('term_condition');
        $data->price = $request->get('price');
        $data->min_guest = $request->get('min_guest');
        $data->duration = $request->get('duration');
        $data->type = $request->get('type');

        if($data->save()){
            return redirect()->route('product.index');
        } else {
            return back()->withInput(Input::all());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }
}
