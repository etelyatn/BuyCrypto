<?php namespace Ikas\Parser\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBCHMoneyCodesTable extends Migration
{
    public function up()
    {
        Schema::create('ikas_parser_bch_money_codes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('code', 3);
            $table->string('name', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ikas_parser_bch_money_codes');
    }
}
