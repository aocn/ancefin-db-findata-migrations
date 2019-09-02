<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsSMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // SZ深股通
        Schema::create('hs_s_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ts_code')->comment('TS代码');
            $table->string('hs_type')->comment('沪深港通类型SH沪SZ深');
            $table->string('in_date')->comment('纳入日期');
            $table->string('out_date')->comment('剔除日期');
            $table->enum('is_new', [0, 1])->comment('是否最新 1是 0否');
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
        Schema::dropIfExists('hs_s_member');
    }
}
