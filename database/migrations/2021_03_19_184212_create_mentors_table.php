<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            
            $table->increments('mentorId');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('email');
            $table->string('profileDescription')->nullable();
            $table->string('mobileNo');
            $table->string('profilePhoto');
            $table->string('cvPath');
            $table->string('trainingForm');
            $table->string('countryCode');
            $table->string('address')->nullable();
            $table->decimal('hiringPrice');
            $table->float('rating',3,1);
            $table->boolean('isAvailableToHire');
            $table->unsignedInteger('noOfHourFoMentee');
            $table->unsignedInteger('totalMentees');
            $table->float('totalEarn');
            $table->float('totalWithdraw');
            $table->integer('universityId');
            $table->integer('serviceId');
            $table->timestamps();
        });
 

        DB::table('mentors')->insert(
            array(
                'firstName' => 'Rashed',
                'middleName' => ' ',
                'lastName' => 'Hoque',
                'email' => 'rashed@gmail.com',
                'profileDescription' => 'I am administrative lawyer',
                'mobileNo' => '01731540704',
                'profilePhoto' => 'uploads/profile_photo/mentors/901245.jpg',
                'cvPath' => 'uploads/cv/mentor/373903.pdf',
                'trainingForm' => 'uploads/training_form/mentor/245377.pdf',
                'countryCode' => 'USA',
                'address' => 'loss angel',
                'hiringPrice' => '40',
                'rating' => '3.5',
                'isAvailableToHire' => true,
                'noOfHourFoMentee' => '34',
                'totalMentees' => '0',
                'totalEarn' => '0',
                'totalWithdraw' => '0',
                'universityId' => '1',
                'serviceId' => '1'
            )
        );


        DB::table('mentors')->insert(
            array(
                'firstName' => 'Paul ',
                'middleName' => ' ',
                'lastName' => 'Samuyel',
                'email' => 'Samuyel@gmail.com',
                'profileDescription' => 'I am VAT and TAX lawyer',
                'mobileNo' => '+2383749384',
                'profilePhoto' => 'uploads/profile_photo/mentors/901245.jpg',
                'cvPath' => 'uploads/cv/mentor/373903.pdf',
                'trainingForm' => 'uploads/training_form/mentor/245377.pdf',
                'countryCode' => 'CAN',
                'address' => ' ',
                'hiringPrice' => '55',
                'rating' => '2.5',
                'isAvailableToHire' => true,
                'noOfHourFoMentee' => '60',
                'totalMentees' => '0',
                'totalEarn' => '0',
                'totalWithdraw' => '0',
                'universityId' => '3',
                'serviceId' => '1'
            )
        );




        DB::table('mentors')->insert(
            array(
                'firstName' => 'Michel ',
                'middleName' => '',
                'lastName' => 'HoJasonque',
                'email' => 'Jason@gmail.com',
                'profileDescription' => 'I am income tax lawyer',
                'mobileNo' => '3849324832',
                'profilePhoto' => 'uploads/profile_photo/mentors/901245.jpg',
                'cvPath' => 'uploads/cv/mentor/373903.pdf',
                'trainingForm' => 'uploads/training_form/mentor/245377.pdf',
                'countryCode' => 'UK',
                'address' => 'london',
                'hiringPrice' => '35',
                'rating' => '4.5',
                'isAvailableToHire' => true,
                'noOfHourFoMentee' => '23',
                'totalMentees' => '0',
                'totalEarn' => '0',
                'totalWithdraw' => '0',
                'universityId' => '2',
                'serviceId' => '1'
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
        Schema::dropIfExists('mentors');
    }
}
