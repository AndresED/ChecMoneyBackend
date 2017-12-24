<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
          DB::table('type_transactions')->insert([
            'id'        => 1,
            'name' => 'Ingreso',
            'description' => 'Ingreso'
        ]);
           DB::table('type_transactions')->insert([
            'id'        => 2,
            'name' => 'Gasto',
            'description' => 'Gasto'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_transactions');
    }
}
