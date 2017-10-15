<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';  //定义用户表名称
    protected $primaryKey = "uid";    //定义用户表主键
    public $timestamps = true;         //是否有created_at和updated_at字段

    protected $fillable = [     //可以被赋值的字段
        'name', 'password', 'email'
    ];

    protected $hidden = [   //在模型数组或 JSON 显示中隐藏某些属性
        'password', 'remember_token',
    ];

}
