<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrojLicenceKolona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upravniks', function (Blueprint $table) {
            $table->renameColumn('licenca', 'broj_licence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upravniks', function (Blueprint $table) {
            $table->renameColumn('broj_licence', 'licenca');
        });
    }
}
