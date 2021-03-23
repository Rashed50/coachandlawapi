<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_names', function (Blueprint $table) {
            $table->increments('serviceNameId');
            $table->string('serviceName');
            $table->integer('serviceTypeId');

          //  $table->foreign('serviceTypeId')->references('serviceTypeId')->on('service_types');
            //$table->foreign('serviceTypeId')->references('serviceTypeId')->on('service_types');
 
        });


        DB::table('service_names')->insert(
            array(
                'serviceName' => 'Administrative Law',
                'serviceTypeId' => 1
            
            )
            );
            DB::table('service_names')->insert(
                array(
                    'serviceName' => 'VAT and TAX Law',
                    'serviceTypeId' => 1
                
                )
                );
                DB::table('service_names')->insert(
                    array(
                        'serviceName' => 'Income Tax Law',
                        'serviceTypeId' => 1
                    
                    )
                    );
                    DB::table('service_names')->insert(
                        array(
                            'serviceName' => 'Constitution Law',
                            'serviceTypeId' => 1
                        
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
        Schema::dropIfExists('service_names');
    }
}

 