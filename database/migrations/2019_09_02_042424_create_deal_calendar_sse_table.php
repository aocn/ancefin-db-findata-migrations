<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealCalendarSseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_calendar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("exchange")->comment("交易所 SSE上交所 SZSE深交所");
            $table->string('cal_date')->comment('日历日期');
            $table->string('is_open')->comment('是否交易 0休市 1交易');
            $table->string('pretrade_date')->comment('上一个交易日');
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
        Schema::dropIfExists('deal_calendar');
    }
}

/**

输出参数
名称	            类型	            默认显示	            描述
exchange	        str	                 Y	            交易所 SSE上交所 SZSE深交所
cal_date	        str	                 Y	            日历日期
is_open	            str	                 Y	            是否交易 0休市 1交易
pretrade_date	    str	                 N	            上一个交易日

*/
