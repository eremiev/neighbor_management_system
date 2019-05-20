<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flat_id');
            $table->unsignedInteger('people_id')->nullable();
            $table->unsignedInteger('cost_type_id');
            $table->boolean('permission');
            $table->timestamps();

            $table->index(['cost_type_id', 'people_id', 'flat_id']);
            $table->foreign('cost_type_id')
                ->references('id')
                ->on('cost_types')
                ->onUpdate('cascade');

            $table->foreign('flat_id')
                ->references('id')
                ->on('flats')
                ->onUpdate('cascade');

            $table->foreign('people_id')
                ->references('id')
                ->on('people')
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
        if (Schema::hasTable('permissions')) {
            Schema::table('permissions', function (Blueprint $table) {
                $table->dropForeign('permissions_flat_id_foreign');
                $table->dropForeign('permissions_cost_type_id_foreign');
                $table->dropForeign('permissions_people_id_foreign');
            });
            Schema::drop('permissions');
        }
    }
}
