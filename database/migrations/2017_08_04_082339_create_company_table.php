<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 创建 公司信息 表
        Schema::create('company', function (Blueprint $table) {
            // id
            $table->increments('cid');
            //所属用户ID
            $table->integer('uid');
            //所属行业id
            $table->integer('iid');
            //公司名称
            $table->string('co_name');
            //公司简介
            $table->text('co_profile');
            //手机
            $table->string('mobile')->unique();
            //免费二级域名
            $table->string('domain')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company');
    }
}
