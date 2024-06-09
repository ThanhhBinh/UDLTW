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
        Schema::create('ptb_menu', function (Blueprint $table) {
            $table->id();
            $table->string('name',1000);
            $table->string('link',1000);
            $table->unsignedInteger('sort_order')->default(0);
            $table->unsignedInteger('parent_id')->default(0);
            $table->string('type',100);
            $table->string('position');
            $table->unsignedInteger('table_id')->default(0);
            $table->tinyInteger('status')->default(2);
            $table->unsignedInteger('create_by')->default(1);
            $table->unsignedInteger('update_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptb_menu');
    }
};
