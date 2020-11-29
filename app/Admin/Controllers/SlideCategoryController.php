<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\SlideCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SlideCategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new SlideCategory(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('object_id');
            $grid->column('title');
            $grid->column('description');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new SlideCategory(), function (Show $show) {
            $show->field('id');
            $show->field('object_id');
            $show->field('title');
            $show->field('description');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new SlideCategory(), function (Form $form) {
            $form->display('id');
            $form->text('object_id');
            $form->text('title');
            $form->text('description');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
