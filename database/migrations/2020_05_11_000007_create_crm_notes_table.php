<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('crm_notes', function (Blueprint $table) {
            $table->id();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
