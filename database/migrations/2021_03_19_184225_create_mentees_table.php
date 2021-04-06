<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentees', function (Blueprint $table) {
              
            $table->increments('menteeId');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('email');
            $table->string('profileDescription')->nullable();
            $table->string('mobileNo');
            $table->string('profilePhoto');
            $table->string('password');
            $table->string('cvPath')->nullable();
            $table->string('countryCode');
            $table->string('address')->nullable();
	        $table->string('paymentUserAccountId')->nullable();
            $table->integer('universityId');
            $table->integer('serviceId');
            $table->timestamps();
        });



        DB::table('mentees')->insert(
            array(
                'firstName' => 'Dolly',
                'middleName' => ' ',
                'lastName' => 'Majon',
                'email' => 'dolly@gmail.com',
                'profileDescription' => 'I am a student',
                'mobileNo' => '+39483943',
                'profilePhoto' => 'uploads/profile_photo/mentors/901245.jpg',
                'password' => '12345',
                'cvPath' => 'uploads/cv/mentor/373903.pdf',
                'countryCode' => 'USA',
                'address' => 'loss angel',
		        'paymentUserAccountId' => '1234567',
                'universityId' => '1',
                'serviceId' => '1'
            )
        );



        DB::table('mentees')->insert(
            array(
                'firstName' => 'Paul',
                'middleName' => ' ',
                'lastName' => 'harrison',
                'email' => 'Paul@gmail.com',
                'profileDescription' => 'I am a student',
                'mobileNo' => '+38493274',
                'profilePhoto' => 'uploads/profile_photo/mentors/901245.jpg',
                'password' => '12345',
                'cvPath' => 'uploads/cv/mentor/373903.pdf',
                'countryCode' => 'USA',
                'address' => 'loss angel',
	         	'paymentUserAccountId' => '1234567',
                'universityId' => '2',
                'serviceId' => '1'
            )
        );

        DB::table('mentees')->insert(
            array(
                'firstName' => 'Angel ',
                'middleName' => ' ',
                'lastName' => 'margee',
                'email' => 'margee@gmail.com',
                'profileDescription' => 'I am a student',
                'mobileNo' => '+38493274',
                'profilePhoto' => 'uploads/profile_photo/mentors/901245.jpg',
                'password' => '12345',
                'cvPath' => 'uploads/cv/mentor/373903.pdf',
                'countryCode' => 'USA',
                'address' => 'loss angel',
		'paymentUserAccountId' => '1234567',
                'universityId' => '3',
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
        Schema::dropIfExists('mentees');
    }
}
