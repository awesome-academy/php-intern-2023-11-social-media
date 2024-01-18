<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable2nd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->tinyInteger('gender');
            $table->date('dob');
            $table->string('address')->nullable();
            $table->string('workplace')->nullable();
            $table->boolean('is_online')->default(true);
            $table->datetime('online_at')->nullable();
            $table->dropColumn('is_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('address');
            $table->dropColumn('workplace');
            $table->dropColumn('is_online');
            $table->dropColumn('online_at');
            $table->boolean('is_admin')->default(false);
        });
    }
}
