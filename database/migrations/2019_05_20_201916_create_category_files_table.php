<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_files', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('file_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();
            $table->index(['category_id', 'file_id']);
            $table->foreign('file_id')
                ->references('id')
                ->on('files')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
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
        if (Schema::hasTable('category_files')) {
            Schema::table('category_files', function (Blueprint $table) {
                $table->dropForeign('category_files_file_id_foreign');
                $table->dropForeign('category_files_category_id_foreign');
            });
            Schema::drop('category_files');
        }
    }
}
