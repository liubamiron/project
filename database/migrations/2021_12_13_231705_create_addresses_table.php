<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `addresses` (
            `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `imobil_id` int(10) unsigned NOT NULL,
            `street` varchar(464) DEFAULT NULL,
            `house_nr` varchar(200) DEFAULT NULL,
            `apart_nr` varchar(200) DEFAULT NULL,
            `city` varchar(100) DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `imobil_id` (`imobil_id`),
            CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`imobil_id`) REFERENCES `imobils` (`id`)
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
        DB::statement("DROP TABLE `addresses`;");
    }
}