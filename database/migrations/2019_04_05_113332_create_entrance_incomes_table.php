<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntranceIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrance_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entrance_id');
            $table->unsignedInteger('flat_id');
            $table->string('cashier');
            $table->decimal('amount');
            $table->timestamps();

            $table->index(['entrance_id', 'flat_id']);
            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('flat_id')
                ->references('id')
                ->on('flats')
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
        if (Schema::hasTable('entrance_incomes')) {
            Schema::table('entrance_incomes', function (Blueprint $table) {
                $table->dropForeign('entrance_incomes_entrance_id_foreign');
                $table->dropForeign('entrance_incomes_flat_id_foreign');
            });
            Schema::drop('entrance_incomes');
        }
    }
}
