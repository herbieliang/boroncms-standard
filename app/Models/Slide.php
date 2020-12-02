<?php

namespace App\Models;

use App\Libraries\Core\BaseModel;

/**
 * 幻灯模型
 *
 * @author Herbie Liang
 *
 */
class Slide extends BaseModel
{

   protected $table = 'slide';

   const URL_TYPE = [
         0 => '自定义'
   ];

   /**
    * 关联分类模型
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function category()
   {
      return $this->belongsTo(SlideCategory::class, 'object_id', 'categary_id');
   }

}
