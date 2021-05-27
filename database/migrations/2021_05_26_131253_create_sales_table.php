<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned();
            $table->integer('contract_no')->nullable();
            $table->integer('recommendation');
            $table->integer('speed');
            $table->integer('service');
            $table->text('comments');
            $table->boolean('is_consented')->default(0)->change();
            $table->timestamps();
            $table->foreign('employee_id')
            ->references('id')
            ->on('employees')
            ->onDelete('cascade')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
