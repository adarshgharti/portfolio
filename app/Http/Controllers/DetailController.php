<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function updateDetail(){
        
        // return view('settings');
        
        $d = new Detail();
        $d->name = request('name');
        $d->email = request('email');
        $d->address = request('address');
        $d->education = request('education');
        $d->description = request('description');
        $d->save();
    }
}
