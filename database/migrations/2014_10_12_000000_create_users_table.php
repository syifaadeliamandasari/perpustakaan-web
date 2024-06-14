<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'users'
        Schema::create('users', function (Blueprint $table) {
            // Kolom ID sebagai primary key auto-increment
            $table->id();
            // Kolom nama pengguna
            $table->string('name');
            // Kolom nomor unik pengguna
            $table->bigInteger('number')->unique();
            // Kolom jenis nomor identitas pengguna
            $table->char('number_type', 4);
            // Kolom peran pengguna
            $table->string('role', 25);
            // Kolom kata sandi
            $table->string('password');
            // Kolom alamat pengguna
            $table->string('address');
            // Kolom nomor telepon pengguna
            $table->bigInteger('telephone');
            // Kolom jenis kelamin pengguna yang dapat bernilai null
            $table->string('gender', 20)->nullable();
            // Kolom untuk token pengingat (remember token)
            $table->rememberToken();
            // Kolom waktu pembuatan dan pembaruan (timestamps)
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        // Hapus tabel 'users' jika migrasi dibatalkan
        Schema::dropIfExists('users');
    }
};

