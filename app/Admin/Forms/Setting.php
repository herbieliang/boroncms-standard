<?php

namespace App\Admin\Forms;

use App\Services\SettingService;
use Dcat\Admin\Widgets\Form;

/**
 * 系统设置表单.
 */
class Setting extends Form
{
    /**
     * Handle the form request.
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        $result = (new SettingService())->batchWrite($input);

        if ($result) {
            return $this->response()->success('保存成功');
        }

        return $this->response()->error('保存失败');
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->tab(admin_trans_label('tabs.basic'), function () {
            $this->text('site_title')
                ->help(admin_trans_label('fields_help.site_title'));
            $this->text('site_short_title')
                ->help(admin_trans_label('fields_help.site_short_title'));
            $this->image('site_logo')
                ->uniqueName()
                ->removeable(FALSE)
                ->autoUpload();
            $this->textarea('site_keywords')
                ->help(admin_trans_label('fields_help.site_keywords'))
                ->rows(3);
            $this->textarea('site_description')
                ->help(admin_trans_label('fields_help.site_description'))
                ->rows(3);
            $this->url('site_url')
                ->help(admin_trans_label('fields_help.site_url'));
            $this->text('site_icp')
                ->help(admin_trans_label('fields_help.site_icp'));
            $this->textarea('header_code')
                ->help(admin_trans_label('fields_help.header_code'));
            $this->textarea('footer_code')
                ->help(admin_trans_label('fields_help.footer_code'));
        });

        $this->tab(admin_trans_label('tabs.email'), function () {
            $this->text('email_smtp');
            $this->text('email_port');
            $this->text('email_account')
                ->help(admin_trans_label('fields_help.email_account'));
            $this->password('email_password')
                ->help(admin_trans_label('fields_help.email_password'));
            $this->text('email_nickname');
        });
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        return (new SettingService())->readAll();
    }
}
