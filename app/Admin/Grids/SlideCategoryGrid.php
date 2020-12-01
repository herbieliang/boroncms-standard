<?php

namespace App\Admin\Grids;

use App\Admin\Repositories\SlideCategory;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;

/**
 * 幻灯分类数据表格类
 *
 * @author Herbie Liang
 *
 */
class SlideCategoryGrid
{

   public function grid()
   {
      return Grid::make(new SlideCategory(), function (Grid $grid) {
         $grid->column('object_id');
         $grid->column('title');
         $grid->column('description');
         $grid->column('created_at')->sortable();
         $grid->column('updated_at')->sortable();

         $grid->filter(function (Grid\Filter $filter) {
            $filter->equal('object_id');
            $filter->like('title');
            $filter->like('description');
            $filter->between('created_at')
               ->datetime();
            $filter->between('updated_at')
               ->datetime();
         });
      });
   }

   public function detail($id)
   {
      return Show::make($id, new SlideCategory(), function (Show $show) {
         $show->field('object_id');
         $show->field('title');
         $show->field('description');
         $show->field('created_at');
         $show->field('updated_at');
      });
   }

}