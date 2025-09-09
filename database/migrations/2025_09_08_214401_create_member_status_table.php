<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member_status', function (Blueprint $table) {
            $table->id();
            $table->string('situation');
        });

        Db::table('member_status')->insert([
            ['situation' => 'congregando'],
            ['situation' => 'expulso'],  
            ['situation' => 'enviado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_status');
    }
};
