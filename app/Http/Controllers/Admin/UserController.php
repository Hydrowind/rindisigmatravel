<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.index', ['data' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new User();

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = Hash::make($request->get('password'));
        $data->role = $request->get('role');

        if($data->save()){
            return redirect()->route('user.index');
        } else {
            return back()->withInput(Input::all());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.user.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.user.edit', ['data' => User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = $request->get('password');
        $data->role = $request->get('role');

        if($data->save()){
            return redirect()->route('user.index');
        } else {
            return back()->withInput(Input::all());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
}
