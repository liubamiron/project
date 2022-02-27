<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterImobilsTableAddSeriaColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('imobils', function (Blueprint $table) {
           $table->string('seria', 40)->default('143')
           ->after('balcony');


       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imobils', function (Blueprint $table) {
            $table->dropColumn('seria');
        });
    }
}

    