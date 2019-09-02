<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ts_code')->comment('股票代码');
            $table->string('exchange')->comment('交易所代码 ，SSE上交所 SZSE深交所');
            $table->string('chairman')->comment('法人代表');
            $table->string('manager')->comment('总经理');
            $table->string('secretary')->comment('董秘');
            $table->double('reg_capital')->comment('注册资本');
            $table->string('setup_date')->comment('注册日期');
            $table->string('province')->comment('所在省份');
            $table->string('city')->comment('所在城市');
            $table->longText('introduction')->comment('公司介绍');
            $table->string('website')->comment('公司主页');
            $table->string('email')->comment('电子邮件');
            $table->string('office')->comment('办公室');
            $table->integer('employees')->comment('员工人数');
            $table->longText('main_business')->comment('主要业务及产品');
            $table->longText('business_scope')->comment('经营范围');
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
        Schema::dropIfExists('company_info');
    }
}
