<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->enum('state_customer', ['Activo', 'Inactivo', 'Suspendido'])->default('Inactivo');
            $table->enum('type_dni', ['CC', 'NIT'])->default('NIT');
            $table->string('dni', 30);
            $table->string('business_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name')->nullable();
            $table->string('slug');
            $table->string('phone')->nullable();
            $table->string('landline')->nullable();
            $table->string('email', 60)->unique();
            $table->boolean('checkedICR')->default(false);
            $table->boolean('checkedTCU')->default(false);
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
        Schema::dropIfExists('customers');
    }
}
