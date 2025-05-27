<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_tracking', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->nullable();
            $table->string('browser')->nullable();
            $table->string('page_name')->nullable();
            $table->string('location')->nullable();
            $table->timestamp('visited_at')->useCurrent()->nullable();
            $table->integer('time_spent')->default(0);
            $table->string('page_title')->nullable();
            $table->string('device_type')->nullable();
            $table->string('os')->nullable();
            $table->string('referrer')->nullable();
            $table->string('session_id')->nullable();
            $table->string('device_category')->nullable();
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
        Schema::dropIfExists('visitor_tracking');
    }
}
