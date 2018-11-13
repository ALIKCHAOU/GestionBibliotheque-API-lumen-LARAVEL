<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BookBorrow', function (Blueprint $table) {
            $table->increments('id',11);
            $table->integer('book_id',11);
            $table->integer('users_id',11);
            $table->softDeletes();
            $table->timestamps();

        });
        Schema::create("users", function($table) {
            $table->increments("id",11);
            $table->string("username", 32);
            $table->string("email", 320);
            $table->string("password", 64);
            $table->timestamps();
            });
      Schema::create("Book", function($table) {
                $table->increments("id",11);
                $table->string("name", 32);
                $table->string("author", 320);
                $table->integer(" page_number")->nullable();
                
               
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BookBorrow');
        Schema::dropIfExists("users");
        Schema::dropIfExists("Book");
    }
}
