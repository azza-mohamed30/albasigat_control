<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',100)->nullable();
            $table->string('username',100);
            $table->string('password',225);
            $table->integer('added_by');
            $table->integer('updated_by');
            $table->tinyInteger('active');
            $table->date('date');
            $table->timestamps();

        });
        DB::table('admins')->insert(
            [
             ['name'=>'azza',
             'email'=>'adminb@gmail.com',
             'username'=>'azza',
             'password'=>bcrypt("azza"),
             'active'=>1,
             'date'=>date("Y-m-d"),
             'added_by'=>1,
             'updated_by'=>1
            ],

            ]

           );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
