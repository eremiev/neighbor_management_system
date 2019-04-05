<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entrance_id');
            $table->string('type');
            $table->enum('period', ['месец', 'година']);
            $table->decimal('price');
            $table->timestamps();

            $table->index(['entrance_id']);
            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
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
        if (Schema::hasTable('type_costs')) {
            Schema::table('type_costs', function (Blueprint $table) {
                $table->dropForeign('type_costs_entrance_id_foreign');
            });
            Schema::drop('type_costs');
        }
    }
}
