<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideTable extends Migration
{

   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('slide', function (Blueprint $table) {
         $table->increments('id');
         $table->bigInteger('object_id')
            ->unique()
            ->comment('对象编号');
         $table->bigInteger('category_id')->comment('所属分类');
         $table->string('image')
            ->default('')
            ->comment('幻灯图片');
         $table->string('title')
            ->nullable()
            ->comment('幻灯标题');
         $table->tinyInteger('url_type')
            ->default('0')
            ->comment('幻灯链接类型，0-自定义');
         $table->bigInteger('item_id')->comment('幻灯关联对象ID');
         $table->string('url')
            ->nullable()
            ->comment('幻灯链接');
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
      Schema::dropIfExists('slide');
   }

}
