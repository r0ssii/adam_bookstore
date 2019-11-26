<?php
# @Date:   2019-11-04T18:09:30+00:00
# @Last modified time: 2019-11-04T19:44:54+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('address');
            $table->integer('phone');->unsigned();
            $table->string('Start Date')->unique();
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
        Schema::dropIfExists('patiants');
    }
}
