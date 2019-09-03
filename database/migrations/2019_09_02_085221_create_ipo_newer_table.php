<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpoNewerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipo_newer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ts_code')->comment('TS股票代码');
            $table->string('sub_code')->comment('申购代码');
            $table->string('name')->comment('名称');
            $table->string('ipo_date')->comment('上网发行日期');
            $table->string('issue_date')->comment('上市日期');
            $table->string('amount')->comment('发行总量（万股）');
            $table->string('market_amount')->comment('上网发行总量（万股）');
            $table->string('price')->comment('发行价格');
            $table->string('pe')->comment('市盈率');
            $table->string('limit_amount')->comment('个人申购上限（万股）');
            $table->string('funds')->comment('募集资金（亿元）');
            $table->string('ballot')->comment('中签率');
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
        Schema::dropIfExists('ipo_newer');
    }
}
