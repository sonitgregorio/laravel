<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\MyModel as mod;
use Session;
use Validator;
use Hash;
use DB;
class MyController extends Controller
{
    public function index()
    {
        $x = new mod;
        // $xs = mod::find(11);
        // $xs = $x->get_spec(11);
        // $xs = DB::table('tbl_users')->where('id', '=', 11)->get();;
        $users = $x->getdata();
        return view('welcome',  ['data' => $users]);
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
            $dat->password =  Hash::make($request->input('password'));
            $dat->save();
            Session::flash('success', 'Here is your success message');
            return redirect('/');
        }
    }
    public function delete($ids)
    {
        $x = mod::find($ids);
        $x->delete();
        Session::flash('success', 'Deleted');
        return redirect('/');
    }
    public function update(Request $request)
    {

        // echo $request->input('id');
        // $x = mod::find($ids);
        // $users = $x->getdata();
        // return view('welcome',  ['x' => $x, 'data' => $users]);
    }
}
