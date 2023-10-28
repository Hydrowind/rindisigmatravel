<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Configuration;
use App\Models\FileUpload;

class ConfigurationController extends Controller
{
    public function index(){
        $data = Configuration::all();
        return view('admin.config.site', [
            'whatsapp' => $data->where('name', Configuration::WHATSAPP)->first()->value,
            'headscript' => $data->where('name', Configuration::HEADSCRIPT)->first()->value,
            'bodyscript' => $data->where('name', Configuration::BODYSCRIPT)->first()->value,
        ]);
    }

    public function update(Request $request){
        $data = Configuration::all();

        foreach($data as $d){
            switch($d->name){
                case Configuration::WHATSAPP    : $d->value = $request->whatsapp; break;
                case Configuration::HEADSCRIPT  : $d->value = $request->headscript; break;
                case Configuration::BODYSCRIPT  : $d->value = $request->bodyscript; break;
                default: break;
            }
            $d->save();
        }

        return back()->withInput();
    }

    public function homepage(){
        return view('admin.config.homepage');
    }

    public function updateHomepage(Request $request){

        /* Partners Section */
        if($request->hasFile('partners')){
            $images = FileUpload::where('object_type', FileUpload::TYPE_PARTNER)->get();
    
            if($images->isNotEmpty()){
                foreach($images as $image){
                    Storage::delete($image->destination);
                    $image->delete();
                }
            }
            
            $files = $request->file('partners');

            foreach($files as $file){
                $filename = date("YmdHis") . rand(0,999) . '.' . $file->getClientOriginalExtension();
                
                // Create and save the image record
                FileUpload::create([
                    'originalname' => $file->getClientOriginalName(),
                    'mimetype' => $file->getMimeType(),
                    'encoding' => null,
                    'path' => '/uploads',
                    'destination' => '/uploads/' . $filename,
                    'size' => $file->getSize(),
                    'aux' => null,
                    'uploader_id' => Auth::user()->id,
                    'object_type' => FileUpload::TYPE_PARTNER
                ]);

                // Move the uploaded image to the desired location
                $file->move('uploads', $filename);
            }
        }

        /* Client Documentation Section */
        if($request->hasFile('guest_doc')){
            $images = FileUpload::where('object_type', FileUpload::TYPE_GUEST_DOCUMENTATION)->get();
            
            if($images->isNotEmpty()){
                foreach($images as $image){
                    Storage::delete($image->destination);
                    $image->delete();
                }
            }

            $files = $request->file('guest_doc');

            foreach($files as $file){
                $filename = date("YmdHis") . rand(0,999) . '.' . $file->getClientOriginalExtension();
                
                // Create and save the image record
                FileUpload::create([
                    'originalname' => $file->getClientOriginalName(),
                    'mimetype' => $file->getMimeType(),
                    'encoding' => null,
                    'path' => '/uploads',
                    'destination' => '/uploads/' . $filename,
                    'size' => $file->getSize(),
                    'aux' => null,
                    'uploader_id' => Auth::user()->id,
                    'object_type' => FileUpload::TYPE_GUEST_DOCUMENTATION
                ]);

                // Move the uploaded image to the desired location
                $file->move('uploads', $filename);
            }
        }

        return back()->withInput();
    }
}
