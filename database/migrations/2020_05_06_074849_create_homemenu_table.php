<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomemenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homemenu', function (Blueprint $table) {
            $table->id();
            $table->string('img_path',500);
            $table->string('lien1',10);
            $table->string('lien2',10);
            $table->string('lien3',10);
            $table->string('lien4',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homemenu');
    }
}
