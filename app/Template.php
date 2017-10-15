<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    // 指定表名
    protected $table = 'template';

    //　指定ｉｄ
    protected $primaryKey = 'id';

    public $timestamps = true;         //是否有created_at和updated_at字段

    protected $fillable = [     //可以被赋值的字段
        'name', 'title', 'summary','img'
    ];
}
