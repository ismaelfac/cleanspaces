<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->references('id')->on('services')->onUpdate('cascade');
            $table->enum('person_type', ['Persona', 'Empresa'])->default('Persona');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->mediumText('comments');
            $table->boolean('checked_notifications')->default(false);
            $table->boolean('checked_rap')->default(false);
            $table->boolean('state')->default(false);
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
        Schema::dropIfExists('quotes');
    }
}
