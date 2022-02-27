<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateImobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" CREATE TABLE `imobils` (
            `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `owner_id` int(10) unsigned NOT NULL,
            `type` enum('APPARTMENT','HOUSE') DEFAULT NULL,
            `price` double DEFAULT NULL,
            `rooms_nr` int(10) unsigned NOT NULL,
            `building_type` enum('NEW','SECONDARY') DEFAULT NULL,
            `square_mp` decimal(10,0) unsigned NOT NULL,
            `floor` int(10) unsigned NOT NULL,
            `bath` int(10) unsigned NOT NULL,
            `balcony` int(10) unsigned NOT NULL,
            `description` text DEFAULT NULL,
            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            KEY `owner_id` (`owner_id`),
            CONSTRAINT `imobils_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`)
            ON DELETE CASCADE ON UPDATE CASCADE
          ) ENGINE=InnoDB 
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("
        DROP TABLE `imobils`;
        ");
    }
}