<?php

use App\Models\Brand;
use App\Models\BrandModel;
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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class)->index();
            $table->foreignIdFor(BrandModel::class)->index();
            $table->string('vin', 17)->unique();
            $table->unsignedInteger('price')->index();
            $table->unsignedInteger('mileage')->default(0)->index();
            $table->enum('condition', ['new', 'used'])->default('new')->index();
            $table->year('manufacture_year')->index();
            $table->string('status')->default('new')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
