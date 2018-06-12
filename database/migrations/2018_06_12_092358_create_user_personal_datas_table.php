<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPersonalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('image');
            $table->text('passport');
            $table->text('driversLicense');
            $table->text('accountStatement');
            $table->text('billingAdress');
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
        Schema::dropIfExists('user_personal_datas');
    }
}
