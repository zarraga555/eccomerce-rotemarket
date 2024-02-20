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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();

            $table->string('type_user')->index();
            $table->string('company_name_supplier')->nullable();
            $table->string('identification_number')->nullable();
            $table->string('type_identification')->nullable();
            $table->string('name_or_legal_representative_name')->nullable();
            $table->string('lastname_or_or_legal_representative_lastname')->nullable();
            $table->string('email_or_legal_representative_email')->nullable();
            $table->string('phone_or_legal_representative_phone')->nullable();
            $table->string('mobile_or_legal_representative_mobile')->nullable();
            $table->string('birthdate_or_legal_representative_birthdate')->nullable();

            $table->float('credit_limit_or_legal_representative_credit_limit', 10, 2);
            $table->enum('pay_term_type', ['days', 'months'])->nullable();

            $table->foreignId('user_id')->nullable()->constrained('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
