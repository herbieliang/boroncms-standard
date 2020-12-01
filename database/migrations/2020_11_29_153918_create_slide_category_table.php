<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideCategoryTable extends Migration
{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('slide_category', function (Blueprint $table) {
         $table->increments('id');
         $table->bigInteger('object_id')
            ->unique()
            ->comment('对象编号');
         $table->string('title')
            ->default('')
            ->comment('分组名称');
         $table->string('description')
            ->nullable()
            ->comment('分组说明');
         $table->timestamps();
         $table->softDeletes();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('slide_category');
   }

}
