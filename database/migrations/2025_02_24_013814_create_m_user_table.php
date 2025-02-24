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
        Schema::create('m_user', function (Blueprint $table) {
            $table->id("user_id");
            $table->unsignedBigInteger("level_id")->index();//indexing untuk fk
            $table->string("username", 20)->unique();//uniq agar tidak ada yg sama
            $table->string("nama", 100);
            $table->string("password");
            $table->timestamps();

            // foreign key kolom level_id dari table m_level
            $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_user', function (Blueprint $table) {
            //
        });
    }
};
