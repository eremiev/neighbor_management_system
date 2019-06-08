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
            $table->unsignedInteger('entrance_id')->nullable();
            $table->unsignedInteger('flat_id')->nullable();
            $table->integer('people')->default(0);
            $table->boolean('paid')->default(false);
            $table->date('date');
            $table->timestamps();

            $table->index([
                'entrance_id',
                'flat_id',
            ]);

            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
                ->onUpdate('cascade');

            $table->foreign('flat_id')
                ->references('id')
                ->on('flats')
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
        if (Schema::hasTable('invoices')) {
            Schema::table('invoices', function (Blueprint $table) {
                $table->dropForeign('invoices_entrance_id_foreign');
                $table->dropForeign('invoices_flat_id_foreign');
            });
            Schema::drop('invoices');
        }
    }
}
