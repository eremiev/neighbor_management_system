<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entrance_id');
            $table->string('type');
            $table->enum('period', ['месец', 'година','апартамент']);
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
        if (Schema::hasTable('cost_types')) {
            Schema::table('cost_types', function (Blueprint $table) {
                $table->dropForeign('cost_types_entrance_id_foreign');
            });
            Schema::drop('cost_types');
        }
    }
}
