<?php

namespace App\Admin\Repositories;

use App\Models\SlideCategory as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SlideCategory extends EloquentRepository
{

    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    /**
     * 获取分类下拉数据
     *
     * @return array
     */
    public function getSelectOptions()
    {
        $result = [];

        $this->model()
            ->all()
            ->map(function ($item) use (&$result) {
            $result[$item->object_id] = $item->title;
        });

        return $result;
    }

}
