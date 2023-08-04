<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusIntoBookingTable extends Migration
{
    public function up()
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->string('status')->after('encrypted_filename')->default('Not Accepted');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
