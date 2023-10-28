<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Configuration;

class ConfigurationController extends Controller
{
    public function index(){
        $data = Configuration::all();
        return view('admin.config', [
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
}
