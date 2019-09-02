<?php

/**
# - 股票列表
# - stock_list

https://tushare.pro/document/2?doc_id=25
"""
接口：stock_basic
描述：获取基础信息数据，包括股票代码、名称、上市日期、退市日期等


输入参数
名称                    类型                必选                    描述
is_hs                   str                 N                   是否沪深港通标的，N否 H沪股通 S深股通
list_status             str                 N                   上市状态： L上市 D退市 P暂停上市
exchange                str                 N                   交易所 SSE上交所 SZSE深交所 HKEX港交所(未上线)


输出参数
名称                类型                描述
ts_code             str               TS代码
symbol              str               股票代码
name                str               股票名称
area                str               所在地域
industry            str               所属行业
fullname            str               股票全称
enname              str               英文全称
market              str               市场类型 （主板/中小板/创业板）
exchange            str               交易所代码
curr_type           str               交易货币
list_status         str               上市状态： L上市 D退市 P暂停上市
list_date           str               上市日期
delist_date         str               退市日期
is_hs               str               是否沪深港通标的，N否 H沪股通 S深股通
"""
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // store the Data list_status = L 上市的公司 (dp单独存放在 `stock_list_dp` 表中)
        Schema::create('stock_list', function (Blueprint $table) {
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
        Schema::dropIfExists('stock_list');
    }
}

