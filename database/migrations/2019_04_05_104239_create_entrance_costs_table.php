<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntranceCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrance_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entrance_id');
            $table->unsignedInteger('cost_type_id');
            $table->string('cashier');
            $table->decimal('amount');
            $table->timestamps();

            $table->index(['entrance_id', 'cost_type_id']);
            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
                ->onUpdate('cascade');

            $table->foreign('cost_type_id')
                ->references('id')
                ->on('cost_types')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('entrance_costs')) {
            Schema::table('entrance_costs', function (Blueprint $table) {
                $table->dropForeign('entrance_costs_entrance_id_foreign');
                $table->dropForeign('entrance_costs_cost_type_id_foreign');
            });
            Schema::drop('entrance_costs');
        }
    }
}
