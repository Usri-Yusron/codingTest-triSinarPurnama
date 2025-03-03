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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id')->primary();;
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->date('due_date');
            $table->enum('status', ['Pending', 'In Progress', 'Completed', 'Canceled'])->default('Pending');  // Status
            $table->unsignedBigInteger('operator_id'); // Operator yang ditugaskan
            $table->timestamps();

            $table->foreign('operator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
