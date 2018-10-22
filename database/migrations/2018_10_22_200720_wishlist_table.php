<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WishlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist', function (Blueprint $table) {
        $table->increments('id');
        $table->string('user_id');
        $table->string('pro_id');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishlist', function($table){
            $table->dropColumn('user_id');    
            });
    }
}
