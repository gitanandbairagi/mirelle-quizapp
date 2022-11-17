<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorToStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->enum('hex', ['#E2EBF6', '#E2F6EA', '#F2EAE2', '#F2E2E2', '#F1E2F2', '#E2F2F1', '#E5EBD7', '#FAFCFB', '#E6E6E6', '#FFE3D1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('hex');
        });
    }
}
