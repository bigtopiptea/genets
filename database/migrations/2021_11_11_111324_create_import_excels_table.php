<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportExcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_excels', function (Blueprint $table) {
            $table->id();
            $table->string('Member_ID', 500);
            $table->string('Member_Name', 500);
            $table->string('Project_ID', 500);
            $table->string('Project_Title', 500);
            $table->string('Project_Description', 500);
            $table->string('Location', 500);
            $table->string('Target_Start_Date', 500);
            $table->string('Target_End_Date', 500);
            $table->string('Actual_Start_Date', 500);
            $table->string('Actual_End_Date', 500);
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
        Schema::dropIfExists('import_excels');
    }
}
