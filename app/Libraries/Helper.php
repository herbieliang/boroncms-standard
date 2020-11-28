<?php

namespace App\Libraries;

/**
 * 助手函数.
 */
class Helper
{
    /**
     * 获取后台路由地址
     *
     * @param string $name
     *
     * @return string
     */
    public function getAdminRoute($name)
    {
        return route(config('admin.route.prefix').'.'.$name);
    }

    /**
     * 更新 env 环境变量文件.
     */
    public function updateEnv(array $data)
    {
        $envPath      = base_path().\DIRECTORY_SEPARATOR.'.env';
        $contentArray = collect(file($envPath, FILE_IGNORE_NEW_LINES));
        $contentArray->transform(function ($item) use ($data) {
            foreach ($data as $key => $value) {
                if (str_contains($item, $key)) {
                    return $key.'='.$value;
                }
            }

            return $item;
        });

        $content = implode("\n", $contentArray->toArray());
        \File::put($envPath, $content);
    }

    /**
     * 获取雪花算法唯一ID.
     *
     * @return string
     */
    public function getSnakeflakeId()
    {
        $snowflake = new \Godruoyi\Snowflake\Snowflake();

        return $snowflake->id();
    }
}
