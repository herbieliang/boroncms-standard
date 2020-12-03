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
            $form->text('title')->rules('required|max:20', [
                    'required' => admin_trans_label('validate.title.required'),
                    'max' => admin_trans_label('validate.title.max')
            ]);
            $form->textarea('description')
                ->rows(5)
                ->rules('max:250', [
                    'max' => admin_trans_label('validate.description.max')
            ]);
        });
    }

}