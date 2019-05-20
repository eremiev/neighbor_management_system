<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('invoice_id');
            $table->unsignedInteger('entrance_id');
            $table->unsignedInteger('flat_id');
            $table->unsignedInteger('ceiling_id')->nullable();
            $table->unsignedInteger('cost_type_id');
            $table->decimal('amount');
            $table->date('date');
            $table->timestamps();

            $table->index([
                'invoice_id',
//                'entrance_id',
                'flat_id',
                'cost_type_id',
            ]);

            $table->foreign('entrance_id')
                ->references('id')
                ->on('entrances')
                ->onUpdate('cascade');

            $table->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onUpdate('cascade');

            $table->foreign('ceiling_id')
                ->references('id')
                ->on('ceilings')
                ->onUpdate('cascade');

            $table->foreign('flat_id')
                ->references('id')
                ->on('flats')
                ->onUpdate('cascade');

            $table->foreign('cost_type_id')
                ->references('id')
                ->on('cost_types')
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
        if (Schema::hasTable('history_invoices')) {
            Schema::table('history_invoices', function (Blueprint $table) {
                $table->dropForeign('history_invoices_invoice_id_foreign');
                $table->dropForeign('history_invoices_ceiling_id_foreign');
                $table->dropForeign('history_invoices_entrance_id_foreign');
                $table->dropForeign('history_invoices_flat_id_foreign');
                $table->dropForeign('history_invoices_cost_type_id_foreign');
            });
            Schema::drop('history_invoices');
        }
    }
}
