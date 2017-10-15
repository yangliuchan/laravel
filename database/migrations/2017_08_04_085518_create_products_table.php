<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 创建 产品信息 表
        Schema::create('products', function (Blueprint $table) {
            // id
            $table->increments('pid');
            //所属公司ID
            $table->integer('cid');
            //所属分类id
            $table->integer('ca_id');
            //产品名称
            $table->string('pro_name');
            //产品卖点
            $table->string('point');
            //产品详情
            $table->text('details');
            //产品图片
            $table->string('img');
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
        Schema::drop('products');
    }
}
