<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penemuan', function (Blueprint $table) {
            $table->dropForeign('penemuan_penemuan_id_foreign');
            $table->dropColumn('pengaduan_id');
            // $table->integer('pengaduan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penemuan', function (Blueprint $table) {
            //
        });
    }
};
