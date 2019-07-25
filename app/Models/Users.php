<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public $table = 'users';

    //获取用户头像
    public function userinfo()
    {
    	return $this->hasOne('App\Models\Usersinfo','uid');
    }
}
