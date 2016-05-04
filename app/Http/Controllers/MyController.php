<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\MyModel;
use Session;
use Validator;

class MyController extends Controller
{
    public function index()
    {
        $x = new mod;
        $users = $x->getdata();
        return view('welcome', ['data' => $users]);
    }
    public function insert_data(Request $request)
    {
            $dat = new mod;
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
            }else{
                $dat->fname = $request->input('firstname');
                $dat->lname = $request->input('middlename');
                $dat->mname = $request->input('lastname');
                $dat->username = $request->input('username');
                $dat->password = $request->input('password');
                $dat->save();
                Session::flash('success', 'Here is your success message');
                return redirect('/');
            }







    }
}
