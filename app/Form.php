<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // 指定表名
    protected $table = 'company';

    //　指定ｉｄ
    protected $primaryKey = 'cid';

    public $timestamps = true;         //是否有created_at和updated_at字段

    protected $fillable = [     //可以被赋值的字段
        'uid', 'iid', 'tid','co_name','co_profile','mobile','domain','address'
    ];
}
