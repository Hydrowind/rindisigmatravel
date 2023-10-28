<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FileUpload;

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
        // Validate the incoming data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // Ensure email uniqueness
            'password' => 'required',
            'role' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate and restrict image uploads
        ]);

        $data = new User();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = Hash::make($request->input('password'));
        $data->role = $request->input('role');

       // Save the user data to the database
        if (!$data->save()) {
            return back()->withInput()->withErrors(['message' => 'User creation failed.']);
        }

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = date("YmdHis") . rand(0,99) . '.' . $file->getClientOriginalExtension();
            
            // Create and save the image record
            $data->images()->create([
                'originalname' => $file->getClientOriginalName(),
                'mimetype' => $file->getMimeType(),
                'encoding' => null,
                'path' => '/uploads',
                'destination' => '/uploads/' . $filename,
                'size' => $file->getSize(),
                'aux' => null,
                'uploader_id' => $data->id,
                'object_id' => $data->id
            ]);

            // Move the uploaded image to the desired location
            $file->move('uploads', $filename);
        }

        return redirect()->route('user.index')->with('success', 'User created successfully.');
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
        $data->role = $request->get('role');


        if($request->file('image')){
            $file = $request->file('image');
            // $filename = date("YmdHis") . rand(0,99) . '.' . $file->getClientOriginalExtension();
            
            // Create and save the image record
            $data->images->first()->update([
                'originalname' => $file->getClientOriginalName(),
                'mimetype' => $file->getMimeType(),
                'encoding' => null,
                'path' => '/uploads',
                // 'destination' => '/uploads/' . $filename,
                'size' => $file->getSize(),
                'aux' => null,
                // 'uploader_id' => $data->id,
                // 'object_id' => $data->id
            ]);

            // Move the uploaded image to the desired location
            $file->move('uploads', $data->images->first()->destination);
        }

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
