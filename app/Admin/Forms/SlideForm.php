<?php

namespace App\Admin\Forms;

use App\Admin\Repositories\Slide;
use App\Admin\Repositories\SlideCategory;
use Dcat\Admin\Form;

/**
 * 幻灯表单类
 *
 * @author Herbie Liang
 *
 */
class SlideForm
{

    public function default()
    {
        return Form::make(new Slide(), function (Form $form) {
            $form->select('category_id')
                ->options((new SlideCategory())->getSelectOptions())
                ->rules('required', [
                    'required' => admin_trans_label('validate.category_id.required')
            ]);
            $form->image('image')
                ->uniqueName()
                ->removeable(FALSE)
                ->autoUpload()
                ->rules('required', [
                    'required' => admin_trans_label('validate.image.required')
            ]);
            $form->text('title')->rules('nullable|max:50', [
                    'max' => admin_trans_label('validate.title.max')
            ]);
            $form->radio('url_type')
                ->options(\App\Models\Slide::URL_TYPE)
                ->default(0)
                ->when(0, function (Form $form) {
                $form->url('url')
                    ->rules('nullable');
            });
        });
    }

}