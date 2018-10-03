<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoneyTransactions extends Migration
{

    private $tableName = 'money_transaction';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->decimal('amount', 8, 2);
            $table->enum('isDaily', ['0', '1'])->default('0');
            $table->enum('isWeekly', ['0', '1'])->default('0');
            $table->enum('isMonthly', ['0', '1'])->default('0');
            $table->enum('isYearly', ['0', '1'])->default('0');
            $table->text('description');
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
        Schema::dropIfExists($this->tableName);
    }
}
