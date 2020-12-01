<?php

namespace App\Admin\Forms;

use App\Admin\Repositories\SlideCategory;
use Dcat\Admin\Form;

/**
 * 幻灯分类表单类
 *
 * @author Herbie Liang
 *
 */
class SlideCategoryForm
{

   public function default()
   {
      return Form::make(new SlideCategory(), function (Form $form) {
         $form->text('title');
         $form->textarea('description')->rows(5);
      });
   }

}