<?php

namespace App\Admin\Grids;

use App\Admin\Repositories\Slide;
use App\Admin\Repositories\SlideCategory;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;

/**
 * 幻灯数据表格类
 *
 * @author Herbie Liang
 *
 */
class SlideGrid
{

    public function grid()
    {
        return Grid::make(new Slide(), function (Grid $grid) {
            $grid->column('object_id');
            $grid->column('image')->image();
            $grid->column('category_id')
                ->using((new SlideCategory())->getSelectOptions())
                ->label(Admin::color()->orange());
            $grid->column('title');
            $grid->column('url_type')
                ->using(\App\Models\Slide::URL_TYPE)
                ->badge();
            $grid->column('created_at')->sortable();
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('object_id');
                $filter->like('title');
                $filter->equal('category_id')
                    ->select((new SlideCategory())->getSelectOptions());
                $filter->equal('url_type')
                    ->select(\App\Models\Slide::URL_TYPE);
                $filter->between('created_at')
                    ->datetime();
                $filter->between('updated_at')
                    ->datetime();
            });

            $grid->quickSearch();
            $grid->export()->filename('slide_' . time());
        });
    }

    public function detail($id)
    {
        return Show::make($id, new Slide(), function (Show $show) {
            $show->field('object_id');
            $show->field('category_id')
                ->using((new SlideCategory())->getSelectOptions())
                ->label(Admin::color()->orange());
            $show->field('image')->image();
            $show->field('title');
            $show->field('url_type')
                ->using(\App\Models\Slide::URL_TYPE)
                ->badge();
            $show->field('url')->link();
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

}