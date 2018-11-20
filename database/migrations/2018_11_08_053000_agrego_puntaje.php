<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Bombero;
class AgregoPuntaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('products', function(Blueprint $table) {
            $table->integer('puntaje')->unsigned();
        });
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('products', function(Blueprint $table) {
            $table->dropColumn('puntaje');
        });
    }
}