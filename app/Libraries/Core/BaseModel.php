<?php

namespace App\Libraries\Core;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

   /**
    * 指示模型主键是否递增.
    *
    * @var bool
    */
   public $incrementing = FALSE;

   /**
    * 重定义主键.
    *
    * @var string
    */
   protected $primaryKey = 'object_id';

   public static function boot()
   {
      parent::boot();

      // 创建模型时生成 object_id
      static::creating(function ($model) {
         $model->object_id = helper()->getSnakeflakeId();
      });
   }

}