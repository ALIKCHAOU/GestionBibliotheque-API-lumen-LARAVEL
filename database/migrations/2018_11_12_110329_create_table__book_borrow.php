<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBookBorrow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BookBorrow', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->integer('users_id');
            $table->softDeletes();
            $table->timestamps();

        });
        Schema::create("users", function($table) {
            $table->increments("id");
            $table->string("username", 32);
            $table->string("email", 320);
            $table->string("password", 64);
            $table->timestamps();
            });
      Schema::create("Book", function($table) {
                $table->increments("id");
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
