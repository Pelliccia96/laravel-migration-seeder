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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->string('train_code');
            $table->string('number_of_carriages');
            $table->boolean('on_time')->default(1);
            $table->boolean('cancelled')->default(0);
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
        Schema::dropIfExists('trains', function (Blueprint $table) {
            $table->id();
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_code');
            $table->dropColumn('number_of_carriages');
            $table->dropColumn('on_time')->default(1);
            $table->dropColumn('cancelled')->default(0);
            $table->timestamps();
        });
    }
};
