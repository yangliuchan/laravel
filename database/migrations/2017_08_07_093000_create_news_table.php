<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 创建 新闻 表
        Schema::create('news', function (Blueprint $table) {
            // id
            $table->increments('nid');
            //所属公司ID
            $table->integer('cid');
            //标题
            $table->string('title');
            //关键字
            $table->string('Keywords');
            //内容
            $table->text('content');
            //图片
            $table->string('img');
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
        Schema::drop('news');
    }
}
