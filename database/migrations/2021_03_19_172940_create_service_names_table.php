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





                        DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Tort Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Public Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Land Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'EU Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Equity & Trusts',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Criminal Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Contract Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'FinTech Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Art Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Energy Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Mergers & Acquisitions',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Real Estate Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Reputation Management',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Islamic Finance Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'White Collar Crime',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Financial Markets',
                                'serviceTypeId' => 1
                            
                            )
                            );
                

                 
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Private Equity Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Travel Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'TMT Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Tax Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Sports & Media Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Property Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Private Client Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Personal Injury Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Shipping Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Litigation',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Intellectual Property Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Insurance Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Human Rights Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Family Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Environmental Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Employment Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Corporate Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Corporate Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Commercial Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Banking & Finance Law',
                                'serviceTypeId' => 1
                            
                            )
                            );
                         DB::table('service_names')->insert(
                            array(
                                'serviceName' => 'Alternative Dispute Resolution',
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

 