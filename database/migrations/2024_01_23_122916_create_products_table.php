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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('sku');
            $table->double('purchase_price', 26, 2);
            $table->bigInteger('margin_of_price');
            $table->double('sale_price', 26,2);
            $table->boolean('status')->nullable();
            $table->foreignId('creat_by')->nullable()->constrained('users');
            $table->foreignId('categoryDepartment_id')->nullable()->constrained('category_departments');
            $table->foreignId('categories_id')->nullable()->constrained('categories');
            $table->foreignId('subcategories_id')->nullable()->constrained('sub_categories');
            $table->foreignId('units_id')->nullable()->constrained('units');
            $table->foreignId('brands_id')->nullable()->constrained('brands');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
