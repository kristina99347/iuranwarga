<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Kosongkan karena kolom email sudah dibuat di create_users_table
    }

    public function down()
    {
        // Tidak perlu drop kolom email karena tidak ditambahkan di sini
    }
};
