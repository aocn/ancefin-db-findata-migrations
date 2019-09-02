<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsHMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // SH沪股通
        Schema::create('hs_h_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ts_code')->comment('TS代码');
            $table->string('hs_type')->comment('沪深港通类型SH沪SZ深');
            $table->string('in_date')->comment('纳入日期');
            $table->string('out_date')->comment('剔除日期');
            $table->string('is_new')->comment('是否最新 1是 0否');
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
        Schema::dropIfExists('hs_h_member');
    }
}
