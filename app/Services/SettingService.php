<?php

namespace App\Services;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class SettingService
{
    /**
     * 写入一个全局配置项.
     *
     * @param string $key   配置项键
     * @param mixed  $value 配置项值
     */
    public function write($key, $value)
    {
        setting()->set($key, $value);
        setting()->save();
    }

    /**
     * 读取一个全局配置项.
     *
     * @param string $key 配置项键
     *
     * @return mixed
     */
    public function read($key)
    {
        $value = setting()->get($key);

        if ('email_password' == $key) {
            try {
                $value = Crypt::decrypt($value);
            } catch (\Exception $exception) {
                Log::error('邮箱密码解密失败：'.$exception->getMessage());
            }
        }

        return $value;
    }

    /**
     * 获取全部全局配置.
     *
     * @return mixed
     */
    public function readAll()
    {
        $settings = setting()->all();

        if (!empty($settings['email_password'])) {
            try {
                $settings['email_password'] = Crypt::decrypt($settings['email_password']);
            } catch (\Exception $exception) {
                Log::error('邮箱密码解密失败：'.$exception->getMessage());
            }
        }

        return $settings;
    }

    /**
     * 批量写入全局配置.
     */
    public function batchWrite(array $data)
    {
        if (\count($data) > 0) {
            // if (isset($data['site_skin'])) {
            // $data['friendly_time'] = 'on' == $data['friendly_time'] ? 1 : 0;
            // $data['ind_mobile'] = 'on' == $data['ind_mobile'] ? 1 : 0;
            // }

            try {
                foreach ($data as $key => $value) {
                    if ('email_password' === $key) {
                        $value = empty($value) ? $value : Crypt::encrypt($value);
                    }
                    $this->write($key, $value);

                    if ('site_url' === $key) {
                        helper()->updateEnv([
                            'APP_URL' => $value,
                        ]);
                    }

                    // if ('site_skin' === $key) {
                    // helper::updateEnv(['APP_THEME' => $value]);
                    // }
                }

                return TRUE;
            } catch (\Exception $exception) {
                return FALSE;
            }
        }

        return FALSE;
    }
}
