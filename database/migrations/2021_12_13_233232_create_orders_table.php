<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `orders`(
            `id` INTEGER UNSIGNED AUTO_INCREMENT,
            `customer_id` INTEGER UNSIGNED NOT NULL,
            `imobil_id` INTEGER UNSIGNED NOT NULL,
            `reserved_start_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `reserved_end_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            CONSTRAINT `orders_imobil_id_fk`
            FOREIGN KEY(`imobil_id`)
            REFERENCES  `imobils`(`id`)
            ON UPDATE CASCADE
            ON DELETE RESTRICT,
            CONSTRAINT `orders_customer_id_fk`
            FOREIGN KEY(`customer_id`)
            REFERENCES `customers`(`id`)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
            ) ENGINE = InnoDB;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE `orders`;");
    }
}