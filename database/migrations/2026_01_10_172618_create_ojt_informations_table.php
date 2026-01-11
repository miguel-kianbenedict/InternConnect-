<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ojt_informations', function (Blueprint $table) {
        $table->id();


        $table->string('company_name');
        $table->string('company_address');
        $table->text('nature_of_business');
        $table->text('networking');

        $table->enum('training_status', ['On-going', 'Completed']);
        $table->enum('level', ['Local', 'National', 'International']);

        $table->date('start_date');
        $table->date('end_date')->nullable();

        $table->timestamps();

        
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ojt_informations');
    }
};
