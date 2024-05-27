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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->date('departure_date')->nullable()->default(null);
            $table->date('arrival_date')->nullable()->default(null);
            
            $table->timestamp('departure_time')->nullable()->default(null);
            $table->timestamp('arrival_time')->nullable()->default(null);
            
            $table->string('train_code', 7)->nullable()->default(null);
            $table->tinyinteger('carriages')->default(0);
            $table->boolean('in_time')->default(true);
            $table->boolean('is_delete')->default(false);
            $table->timestamps();

            /*
            create table `trains` (
                `id` bigint unsigned not null auto_increment primary key,
                `company` varchar(255) not null,
                `departure_station` varchar(255) not null,
                `arrival_station` varchar(255) not null, 
                `departure_date` date not null
                 `arrival_date` date not null,
                 `departure_time` timestamp null,
                 `arrival_time` timestamp null,
                 `train_code` smallint not null auto_increment primary key,
                 `carriages` tinyint null auto_increment primary key,
                 `in_time` tinyint(1) not null default '1',
                 `is_delete` tinyint(1) not null default '0',
                 `created_at` timestamp null,
                 `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci')
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
