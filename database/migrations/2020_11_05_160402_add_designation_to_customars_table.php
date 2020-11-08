<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDesignationToCustomarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customars', function (Blueprint $table) {
            $table->string('designation')->nullable()->after('description');
            $table->text('description')->nullable()->change();
            $table->renameColumn('name', 'username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customars', function (Blueprint $table) {
            $table->dropColumn('designation');
        });
    }
}
