<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->integer('child_num_id');
            $table->string('full_name_children');
            $table->date('birthday');
            $table->date('admission');
            $table->string('address');
            $table->string('full_name_mother');
            $table->string('phone_number_mother');
            $table->string('pass_mother');
            $table->string('full_name_father');
            $table->string('phone_number_father');
            $table->string('pass_father');
            $table->string('phone_number_home');
            $table->string('another_address');
            $table->string('photo_of_child');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
