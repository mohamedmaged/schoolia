<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json("student");
            $table->json("school");
            $table->json("parents");
            $table->json("more")->nullable();
            $table->tinyInteger("status")->default(0); // 0=> wait , 1=> 1 accept ,2 =>refuse
            $table->timestamp("accept_time");
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
        Schema::dropIfExists('online_admissions');
    }
}
