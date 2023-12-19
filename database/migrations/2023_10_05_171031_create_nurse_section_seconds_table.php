<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_section_seconds', function (Blueprint $table) {
            $table->id();                    
            $table->boolean('angry')->nullable();
            $table->boolean('agitated')->nullable();
            $table->boolean('fearful')->nullable();
            $table->boolean('sad')->nullable();
            $table->boolean('discourage')->nullable();
            $table->boolean('lonely')->nullable();
            $table->boolean('depressed')->nullable();
            $table->boolean('helpless')->nullable();
            $table->boolean('forgetfull')->nullable();
            $table->boolean('confused')->nullable();
            $table->boolean('content')->nullable();
            $table->boolean('happy')->nullable();
            $table->boolean('hopeful')->nullable();
            $table->boolean('motivated')->nullable();
            $table->string('statusOther')->nullable();
            $table->string('turgor')->nullable();
            $table->string('turgorColor')->nullable();
            $table->string('turgorTemp')->nullable();
            $table->boolean('itch')->nullable();
            $table->boolean('rash')->nullable();
            $table->boolean('try')->nullable();
            $table->boolean('scaling')->nullable();
            $table->boolean('redness')->nullable();
            $table->boolean('ecchymosis')->nullable();
            $table->boolean('pallor')->nullable();
            $table->string('jaundice')->nullable();
            // $table->string('jaundice')->nullable();
            $table->string('turgorOther')->nullable();
            $table->boolean('soiledDressingRemoved')->nullable();
            
           
            $table->integer('modified_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('nurse_section_seconds');
    }
};
