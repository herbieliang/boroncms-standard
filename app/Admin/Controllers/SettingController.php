<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\Setting;
use App\Http\Controllers\Controller;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;

/**
 * 网站设置控制器.
 */
class SettingController extends Controller
{
    public function setting(Content $content)
    {
        return $content->title(admin_trans('menu.titles.setting'))
            ->body(new Card(new Setting()));
    }
}
