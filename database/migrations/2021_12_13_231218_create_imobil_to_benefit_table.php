<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateImobilToBenefitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::statement("CREATE TABLE `imobil_to_benefit` (
        `imobil_id` int(10) unsigned NOT NULL,
        `benefit_id` bigint(20) unsigned NOT NULL,
        PRIMARY KEY (`imobil_id`,`benefit_id`),
        KEY `imobil_to_benefit_benefit_id_fk` (`benefit_id`),
        CONSTRAINT `imobil_to_benefit_benefit_id_fk` FOREIGN KEY (`benefit_id`) REFERENCES `benefits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT `imobil_to_benefit_imobil_id_fk` FOREIGN KEY (`imobil_id`) REFERENCES `imobils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
        DB::statement("DROP TABLE`imobil_to_benefit`");

    }
}