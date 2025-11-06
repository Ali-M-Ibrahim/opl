<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cifs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('dine');
            $table->string('mazhab')->nullable();
            $table->longText('work')->nullable();
            $table->string('mohafaza')->nullable();
            $table->string('kadaa')->nullable();
            $table->longText('work_address')->nullable();
            $table->string('work_telephone')->nullable();
            $table->longText('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('registration_date')->nullable();
            $table->longText('university')->nullable();
            $table->string('year')->nullable();
            $table->boolean('can_vote')->default(1);
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
        Schema::dropIfExists('cifs');
    }
}
