<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use App\MyModel;
use Validator;
class MyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function insert_data(Request $request)
    {
            $dat = new MyModel;
            $dat->fname = $request->input('fname');
            $dat->save();
            $validator = Validator::make($request->all(), [
                'fname' => 'required|unique:fname|max:255',
                'fname' => 'required',
            ]);

            if ($validator->fails()) {
               return redirect('/')
                           ->withErrors($validator)
                           ->withInput();
           }

            Session::flash('success', 'Here is your success message');
            return redirect('/');
    }
}
