<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class MyModel extends Model
    {
        protected $table = 'tbl_users';
        protected $fillable = ['fname', 'mname', 'lname', 'username', 'password'];
        public function getdata()
        {
            return MyModel::where('id', 1)->get();
        }

    }
