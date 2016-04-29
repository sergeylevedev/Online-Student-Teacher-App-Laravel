<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTopicToQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions',function(Blueprint$table){
            $table->string('topic1')->nullable();
            $table->string('topic2')->nullable();
            $table->string('topic3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions',function(Blueprint$table){
            $table->dropColumn('topic1');
            $table->dropColumn('topic2');
            $table->dropColumn('topic3');
        });
    }
}
