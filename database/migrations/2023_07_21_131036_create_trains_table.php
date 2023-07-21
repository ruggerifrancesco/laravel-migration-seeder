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
            $table->string('company'); // Azienda -> Company (VARCHAR)
            $table->string('departure_station'); // Stazione di partenza -> Departure Station (VARCHAR)
            $table->string('arrival_station'); // Stazione di arrivo -> Arrival Station (VARCHAR)
            $table->dateTime('departure_time'); // Orario di partenza -> Departure Time (DATETIME)
            $table->dateTime('arrival_time'); // Orario di arrivo -> Arrival Time (DATETIME)
            $table->string('train_code'); // Codice Treno -> Train Code (VARCHAR)
            $table->integer('num_carriages'); // Numero Carrozze -> Number of Carriages (INTEGER)
            $table->boolean('on_time')->default(true); // In orario -> On Time (BOOLEAN)
            $table->boolean('canceled')->default(false); // Cancellato -> Canceled (BOOLEAN)
            $table->text('additional_info')->nullable(); // Additional information (TEXT) - Example: for any extra details about the train
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
        Schema::dropIfExists('trains');
    }
};
