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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('cli_name', 180);  // nome
            $table->string('cli_email', 180)->unique(); // email
            $table->string('cli_phone', 20)->nullable();
            $table->string('cli_address1', 180);
            $table->string('cli_address2', 180)->nullable();
            $table->string('cli_zipcode', 20);
            $table->string('cli_city', 100);
            $table->string('cli_nif', 15)->unique();
            $table->foreignId('cli_rfidid')->nullable()->constrained('rfid')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
