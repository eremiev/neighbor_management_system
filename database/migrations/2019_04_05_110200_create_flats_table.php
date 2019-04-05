<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entrance_id');
            $table->unsignedInteger('ceiling_id')->nullable();
            $table->integer('number');
            $table->decimal('balance', 2, 2);
            $table->timestamps();

            $table->index(['entrance_id', 'ceiling_id']);
            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('ceiling_id')
                ->references('id')
                ->on('ceilings')
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
        if (Schema::hasTable('flats')) {
            Schema::table('flats', function (Blueprint $table) {
                $table->dropForeign('flats_entrance_id_foreign');
                $table->dropForeign('flats_ceiling_id_foreign');
            });
            Schema::drop('flats');
        }
    }
}
