<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByUpdatedByInCarPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('car_plan', function (Blueprint $table) {
            if (! Schema::hasColumn('car_plan', 'created_by')) {
                $table->string('created_by')->nullable();
            }
            if (! Schema::hasColumn('car_plan', 'updated_by')) {
                $table->string('updated_by')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_plan', function (Blueprint $table) {
            //
        });
    }
}
