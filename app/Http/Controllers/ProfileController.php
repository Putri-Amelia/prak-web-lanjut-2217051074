<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama'=> 'Putri Amelia',
            'kelas'=> 'C',
            'npm'=> '2217051074'
        ];
        return view('profile',$data);
    }
}