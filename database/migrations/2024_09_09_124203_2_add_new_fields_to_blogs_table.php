<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('content_1')->nullable();
            $table->string('content_2')->nullable();
            $table->string('content_3')->nullable();
            $table->string('content_4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('content_1');
            $table->dropColumn('content_2');
            $table->dropColumn('content_3');
            $table->dropColumn('content_4');
        });
    }
};
