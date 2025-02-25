<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['title' => 'light'],
            ['title' => 'fragile'],
            ['title' => 'heavy'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
