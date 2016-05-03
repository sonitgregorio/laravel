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
        $users = DB::table('tbl_users')->get();
        return view('welcome', ['data' => $users]);
    }
    public function insert_data(Request $request)
    {
            $dat = new MyModel;
            $dat->fname = $request->input('fname');
            $validator = Validator::make($request->all(), [
             'firstname' => 'required|string',
             'middlename' => 'required|string',
             'lastname' => 'required|string',
             'username' => 'required|email',
             'password' => 'required|min:8|alpha_dash'
            ]);

            if ($validator->fails()) {
               return redirect('/')->withErrors($validator)->withInput();
            }


            Session::flash('success', 'Here is your success message');
            return redirect('/');
    }
}
