<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['main','sub'])->default('sub');
            $table->integer('main_id')->nullable();
            $table->string('service');
            $table->text('details')->nullable();
            $table->double('service_fee')->default(0.0);
            $table->double('onsite_service_fee')->default(0.0);
            $table->enum('status',['on','off'])->default('on');
            $table->softDeletes();
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
        Schema::dropIfExists('services');
    }
}
