<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Slide;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SlideController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Slide(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('object_id');
            $grid->column('image');
            $grid->column('title');
            $grid->column('url_type');
            $grid->column('url');
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
        return Show::make($id, new Slide(), function (Show $show) {
            $show->field('id');
            $show->field('object_id');
            $show->field('image');
            $show->field('title');
            $show->field('url_type');
            $show->field('url');
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
        return Form::make(new Slide(), function (Form $form) {
            $form->display('id');
            $form->text('object_id');
            $form->text('image');
            $form->text('title');
            $form->text('url_type');
            $form->text('url');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
