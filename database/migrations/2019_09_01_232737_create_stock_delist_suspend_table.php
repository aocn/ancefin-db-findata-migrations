<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockDelistSuspendTable extends Migration
{
    /**
     * Run the migrations.
     * @param 所有参数参考  `stock_list` 表
     * @return void
     */
    public function up()
    {
        Schema::create('stock_list_dp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ts_code')->comment('TS代码');
            $table->string('symbol')->comment('股票代码');
            $table->string('name')->comment('股票名称');
            $table->string('area')->comment('所在地域');
            $table->string('industry')->comment('所属行业');
            $table->string('fullname')->comment('股票全称');
            $table->string('enname')->comment('英文全称');
            $table->string('market')->comment('市场类型 （主板/中小板/创业板）');
            $table->string('exchange')->comment('交易所代码');
            $table->string('curr_type')->comment('交易货币');
            $table->string('list_status')->comment('上市状态： L上市(List) D退市(Delist) P暂停上市(Suspension)');
            $table->string('list_date')->comment('上市日期');
            $table->string('delist_date')->comment('退市日期');
            $table->string('is_hs')->comment('是否沪深港通标的，N否 H沪股通 S深股通');
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
        Schema::dropIfExists('stock_list_dp');
    }
}
