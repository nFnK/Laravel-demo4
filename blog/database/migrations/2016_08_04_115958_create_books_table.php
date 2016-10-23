<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name')->default('') ;
            $table->string('book_url')->default('');
            $table->integer('edition')->default('0') ;
            $table->integer('section_id')->nullable() ;
            $table->string('title')->default('') ;
            $table->date('publication')->default('2010-01-03') ;
            $table->text('description')->default('') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
