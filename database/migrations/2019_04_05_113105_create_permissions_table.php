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
            $table->unsignedInteger('type_cost_id');
            $table->unsignedInteger('people_id');
            $table->boolean('permission');
            $table->timestamps();

            $table->index(['type_cost_id', 'people_id']);
            $table->foreign('type_cost_id')
                ->references('id')
                ->on('type_costs')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('people_id')
                ->references('id')
                ->on('people')
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
        if (Schema::hasTable('permissions')) {
            Schema::table('permissions', function (Blueprint $table) {
                $table->dropForeign('permissions_type_cost_id_foreign');
                $table->dropForeign('permissions_people_id_foreign');
            });
            Schema::drop('permissions');
        }
    }
}
