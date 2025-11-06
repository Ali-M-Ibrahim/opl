<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaselectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haselecteds', function (Blueprint $table) {
            $table->id();
            $table ->integer('cifs_code');
            $table -> string('dine')->nullable();
            $table -> string('state');
            $table -> string('kadaa');
            $table ->integer('user_id');
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
        Schema::dropIfExists('haselecteds');
    }
}
