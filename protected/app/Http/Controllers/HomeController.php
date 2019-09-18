<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profil(){
        $data['text'] = "hai";


        return view('profil.index')->with($data);
    }

    public function simpan_profil(Request $request){
        $data = new User;

        $data->name = $request->email;
        $data->email = $request->email;
        $data->password = md5($request->pass);

        $data->save();
    }
}
