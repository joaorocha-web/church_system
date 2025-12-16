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
        Schema::create('member_ministries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade');
            $table->foreignId('ministry_id')->constrained('ministries')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('ministry_participation_status')->default(1)->onDelete('restrict');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreignId('assigned_by')->nullable()->constrained('users');

            $table->unique(['member_id', 'ministry_id']);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ministries');
    }
};
