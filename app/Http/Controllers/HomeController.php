<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   

    public function create(){
        $dokter = DB::table('dokter')->get();
        return view("create0254", ['dokter' => $dokter]);
    }


    public function store(Request $request)
    {
	
	DB::table('dokter')->insert([
		'nama' => $request->nama,
		'jabatan' => $request->jabatan,
		
	]);
	
	return redirect('/hal_create');
    
    }



}