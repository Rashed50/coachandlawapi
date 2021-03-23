<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('universityId');
            $table->string('universityName');
            $table->string('countryCode');
            $table->string('CountryState'); 
 
        });

        DB::table('universities')->insert(
            array(
                'universityName' => 'IIT',
                'countryCode' => 'India',
                'CountryState' => 'Prochimbango'
            )
            );




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
 