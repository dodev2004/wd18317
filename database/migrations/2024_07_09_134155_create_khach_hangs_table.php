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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string("ten_khach_hang",100);
            $table->string("dia_chi",100)->nullable();
            $table->string("so_dien_thoai",13)->nullable();
            $table->string("email",100);
            $table->date("ngay_sinh")->nullable();
            $table->boolean("trang_thai")->default(0);
            $table->text("anh")->nullable();
            $table->timestamps();
        });
    }       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
