<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entrance_id');
            $table->unsignedInteger('flat_id');
            $table->unsignedInteger('people_id');
            $table->unsignedInteger('permission_id');
            $table->date('period');
            $table->decimal('price');
            $table->boolean('paid');
            $table->timestamps();

            $table->index([
                'entrance_id',
                'flat_id',
                'people_id',
                'permission_id',
            ]);

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

            $table->foreign('people_id')
                ->references('id')
                ->on('people')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions')
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
        if (Schema::hasTable('invoices')) {
            Schema::table('invoices', function (Blueprint $table) {
                $table->dropForeign('invoices_entrance_id_foreign');
                $table->dropForeign('invoices_flat_id_foreign');
                $table->dropForeign('invoices_people_id_foreign');
                $table->dropForeign('invoices_permission_id_foreign');
            });
            Schema::drop('invoices');
        }
    }
}
