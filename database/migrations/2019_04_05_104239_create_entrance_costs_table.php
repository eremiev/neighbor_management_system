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
            $table->unsignedInteger('type_cost_id');
            $table->string('cashier');
            $table->decimal('amount');
            $table->timestamps();

            $table->index(['entrance_id', 'type_cost_id']);
            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('type_cost_id')
                ->references('id')
                ->on('type_costs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
                $table->dropForeign('entrance_costs_type_cost_id_foreign');
            });
            Schema::drop('entrance_costs');
        }
    }
}
