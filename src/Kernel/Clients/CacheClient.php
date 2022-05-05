<?php

namespace whereof\cloudPrint\Kernel\Clients;

use whereof\cloudPrint\Kernel\BaseClient;

class CacheClient extends BaseClient
{

    /**
     * 设置缓存.
     * @param     $key
     * @param     $value
     * @return bool
     */
    public function setCache($key, $value)
    {
        return file_put_contents($key, unserialize($value));
    }

    /**
     * 获取缓存.
     * @param $key
     * @return mixed
     */
    public function getCache($key)
    {
        return file_get_contents($key);
    }

    /**
     * 判断缓存是否存在.
     * @param $key
     * @return mixed
     */
    public function hasCache($key)
    {
        return file_exists($key);
    }

    /**
     * 删除缓存.
     * @param $key
     * @return bool
     */
    public function deleteCache($key)
    {
        return unlink($key);
    }

}