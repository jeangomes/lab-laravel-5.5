<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileController extends Controller
{
    public function upload()
    {
    	return view('up');
    }

    public function move(Request $request)
    {
    	

        //var_dump($request);
		$path = $request->file('photo')
            ->store('clientes/docs');

        //var_dump($path);
    	//exit();
    	//$fileName = 'bye.pdf'; // generate unique name.
		//$res = Storage::disk('dospace')->put($fileName, 'Olá mundo');
		//Storage::disk('dospace')->setVisibility($fileName, 'public'); // Set the visibility to public.
		//$url = Storage::disk('dospace')->url($path);
		return response()->json(['success' => true, 'response' => $path], Response::HTTP_CREATED);
    }
}
