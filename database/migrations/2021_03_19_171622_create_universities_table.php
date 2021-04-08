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
        'universityName' => 'University of Aberdeen',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Abertay',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Aberystwyth',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Anglia Ruskin University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Aston University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Bangor University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Bath',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'Bath Spa University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Bedfordshire',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Birmingham',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Birmingham City University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Bolton',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Bournemouth University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Bradford',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Brighton',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Bristol',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Brunel University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Buckingham',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Buckinghamshire New University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Cambridge',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Canterbury Christ Church University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Cardiff University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Cardiff University of Wales Institute (UWIC)',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Central Lancashire (UCLan)',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Chester University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Chichester',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'City University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Coventry University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Cumbria University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'De Montfort University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Derby',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Dundee',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Durham University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of East Anglia',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of East London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Edge Hill University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Edinburgh',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Essex',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Exeter',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Glamorgan',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of Glasgow',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Glasgow Caledonian',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Gloucestershire',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'Goldsmiths, University of London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Greenwich',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Heriot Watt University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of Hertfordshire',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Huddersfield',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Hull',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'Imperial College',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Keele',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Kent',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'King’s College London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Kingston University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Lampeter, University of Wales',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'Lancaster University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Leeds',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Leeds Metropolitan University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of Leicester',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Leicester',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Liverpool',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'Liverpool Hope University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Liverpool John Moores University ',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'London Metropolitan University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'London School of Economics and Political Science',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'London South Bank University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Loughborough University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Manchester',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Manchester Metropolitan University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Middlesex University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Napier University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Newcastle University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Wales, Newport',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Northampton',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Northumbria University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Nottingham',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Nottingham Trent University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Oxford',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Oxford Brookes University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Plymouth',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Portsmouth',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Queen Margaret University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Queen Mary, University of London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Queen’s University, Belfast',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Reading',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'The Robert Gordon University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Roehampton University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Royal Holloway, University of London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of St Andrews',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Salford',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'School of African and Oriental Studies, London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Sheffield',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Sheffield Hallam University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Southampton',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'Southampton Solent',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Staffordshire University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Stirling',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Strathclyde',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Sunderland',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Surrey',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of Sussex',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Swansea University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Swansea Metropolitan University ',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of Teesside',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'Thames Valley University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Ulster',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of the Arts London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University College London',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Warwick',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of the West of England, Bristol',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of the West of Scotland',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Westminster',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );


DB::table('universities')->insert(
    array(
        'universityName' => 'University of Winchester',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Wolverhampton',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'University of Worcester',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );



DB::table('universities')->insert(
    array(
        'universityName' => 'University of York',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
    )
    );

DB::table('universities')->insert(
    array(
        'universityName' => 'York St John University',
        'countryCode' => 'UK',
        'CountryState' => 'UK'
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
 