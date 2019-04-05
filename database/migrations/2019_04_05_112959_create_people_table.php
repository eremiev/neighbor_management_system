<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flat_id');
            $table->unsignedInteger('ceiling_id')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->timestamps();

            $table->index(['flat_id', 'ceiling_id']);
            $table->foreign('flat_id')
                ->references('id')
                ->on('flats')
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
        if (Schema::hasTable('people')) {
            Schema::table('people', function (Blueprint $table) {
                $table->dropForeign('people_flat_id_foreign');
                $table->dropForeign('people_ceiling_id_foreign');
            });
            Schema::drop('people');
        }
    }
}
