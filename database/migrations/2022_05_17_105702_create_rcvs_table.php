<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcvs', function (Blueprint $table) {
        
            $table->string('graduateid');
           $table->string('companyphone');
           $table->string('companyname');
           $table->string('companyemail');
           $table->string('companyregion');
           $table->string('companycity');
           $table->string('date');
           $table->string('reasonofverification');
             
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
        Schema::dropIfExists('rcvs');
    }
};
