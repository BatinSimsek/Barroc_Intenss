<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('maintenance_id');
            $table->unsignedBigInteger('lease_id');
            $table->unsignedBigInteger('workordersproducts_id');
            $table->integer('bonnumber');
            $table->string('malfunction');
            $table->string('mechanic');
            $table->date('dateworkorders');
            $table->string('failureaddress');
            $table->string('remarksworkorders');
            $table->timestamps();

            $table->foreign('maintenance_id')
                ->references('id')
                ->on('users');

            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');

            $table->foreign('workordersproducts_id')
                ->references('id')
                ->on('workordersproducts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_orders');
    }
}
