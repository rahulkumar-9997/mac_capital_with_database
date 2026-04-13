<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnlistedShareItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unlisted_share_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unlisted_share_list_id')->constrained()->onDelete('cascade');
            $table->string('script_name');
            $table->string('face_value')->nullable();
            $table->string('landing_price')->nullable();
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
        Schema::dropIfExists('unlisted_share_items');
    }
}
