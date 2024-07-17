<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Добавляем новый столбец UUID
            $table->uuid('uuid')->nullable()->index();
        });

        // Обновляем существующие записи и устанавливаем для них UUID
        \DB::table('users')->get()->each(function ($user) {
            \DB::table('users')->where('id', $user->id)->update(['uuid' => (string) Str::uuid()]);
        });

        Schema::table('users', function (Blueprint $table) {
            // Удаляем первичный ключ с 'id'
            $table->dropPrimary('id');
            // Делаем 'uuid' новым первичным ключом
            $table->primary('uuid');
            // Переименовываем 'uuid' в 'id'
            $table->renameColumn('uuid', 'id');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Добавляем временный столбец для восстановления старого id
            $table->increments('temp_id');
        });

        // Восстанавливаем старые id
        \DB::table('users')->get()->each(function ($user) {
            \DB::table('users')->where('id', $user->id)->update(['temp_id' => $user->id]);
        });

        Schema::table('users', function (Blueprint $table) {
            // Восстанавливаем старый id и делаем его основным ключом
            $table->dropPrimary('id');
            $table->dropColumn('id');
            $table->renameColumn('temp_id', 'id');
            $table->primary('id');
        });
    }
};
