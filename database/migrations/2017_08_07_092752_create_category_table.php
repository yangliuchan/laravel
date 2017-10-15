<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 创建 产品分类 表
        Schema::create('category', function (Blueprint $table) {
            // id
            $table->increments('ca_id');
            //所属公司ID
            $table->integer('cid');
            //分类名称
            $table->string('ca_name');
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
        Schema::drop('category');
    }
}
