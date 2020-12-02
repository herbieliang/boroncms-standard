<?php

namespace App\Models;

use App\Libraries\Core\BaseModel;

/**
 * 幻灯分类模型
 *
 * @author Herbie Liang
 *
 */
class SlideCategory extends BaseModel
{

   protected $table = 'slide_category';

   public static function boot()
   {
      parent::boot();

      static::deleted(function ($model) {
         $model->slides()->delete();
      });
   }

   /**
    * 关联幻灯模型
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function slides()
   {
      return $this->hasMany(Slide::class, 'category_id', 'object_id');
   }

}
