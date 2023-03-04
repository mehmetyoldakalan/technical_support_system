<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $servicesStatus=[
            'completed',
            'on_hold',
            'seen',
            'in_review',
            'team_on_way',
            'rejected',
            'request_sent'
        ];

        Schema::create('service_requests', function (Blueprint $table) use ($servicesStatus) {
            $table->id();
            $table->integer('user_id');
            $table->integer('services_id');
            $table->text('request_details')->nullable();
            $table->string('request_img')->nullable();
            $table->string('request_img1')->nullable();
            $table->string('request_img2')->nullable();
            $table->string('request_img3')->nullable();
            $table->enum('contact_type',['phone','mail','live_meet','chat']);
            $table->dateTime('contact_time')->default(\Illuminate\Support\Carbon::now()->addHour(1));
            $table->enum('onsite_service',['yes','no'])->default('no');
            $table->enum('status',['on','off'])->default('on');
            $table->enum('service_status',$servicesStatus)->default('request_sent');
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
        Schema::dropIfExists('service_requests');
    }
}
