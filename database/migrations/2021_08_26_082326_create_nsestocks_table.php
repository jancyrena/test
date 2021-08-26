<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNsestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsestocks', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->nullable();							
            $table->string('companyname')->nullable();
            $table->double('currentmarketprice', 8, 2)->nullable();
            $table->double('market_cap', 8, 2)->nullable();
            $table->double('stock_PE', 8, 2)->nullable();
            $table->double('dividend_yield', 8, 2)->nullable();
            $table->double('roce_per', 8, 2)->nullable();
            $table->double('roe_pr_ann', 8, 2)->nullable();
            $table->double('debttoequity', 8, 2)->nullable();
            $table->double('eps', 8, 2)->nullable();
            $table->double('deserves', 8, 2)->nullable();
            $table->double('debt', 8, 2)->nullable();
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
        Schema::dropIfExists('nsestocks');
    }
}
