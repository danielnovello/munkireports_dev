<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class NoMADInit extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('NoMAD', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number')->unique();
            $table->string('item1');
            $table->string('item2');
            $table->integer('item3');
            $table->integer('item4');

            $table->index('item1');
            $table->index('item2');
            $table->index('item3');
            $table->index('item4');
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('NoMAD');
    }
}
