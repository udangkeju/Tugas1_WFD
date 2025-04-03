<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('promotions', function (Blueprint $table) {
            $table->string('category')->nullable()->after('image');
        });
    }

    public function down()
    {
        Schema::table('promotions', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};