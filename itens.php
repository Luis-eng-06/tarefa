<?php

public function up()

{
    Schema::create ('items', function (Blueprint $table){

        $table->id();
        $table->string('name');
        $table->text('description')->nullable();
        $table->timestamps();

    });
}






?>