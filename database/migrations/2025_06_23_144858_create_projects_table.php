<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ProjectStatus;
use App\Enums\PaymentStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->decimal('base_price', 12, 2)->default(0);
            $table->decimal('price', 12, 2)->nullable();
            $table->enum('status', ProjectStatus::values())->default(ProjectStatus::Pending);
            $table->enum('payment_status', PaymentStatus::values())->default(PaymentStatus::Unpaid);
            $table->decimal('total_paid', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
