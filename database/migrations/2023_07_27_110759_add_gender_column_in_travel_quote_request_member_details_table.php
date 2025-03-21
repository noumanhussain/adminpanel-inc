<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenderColumnInTravelQuoteRequestMemberDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travel_quote_request_member_details', function (Blueprint $table) {
            if (! Schema::hasColumn('travel_quote_request_member_details', 'gender')) {
                $table->string('gender')->nullable();
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
        Schema::table('travel_quote_request_member_details', function (Blueprint $table) {
            //
        });
    }
}
