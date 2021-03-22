<?php

namespace app\index\controller;

use think\Controller;
use think\Facade\Cache;

class cachec extends Controller
{
    public function clearCache() {
        $CACHE_PATH = config('cache.runtime_path').'/cache/';
        $TEMP_PATH = config('cache.runtime_path').'/temp/';
        $LOG_PATH = config('cache.runtime_path').'/log/';
        if (delete_dir_file($CACHE_PATH) && delete_dir_file($TEMP_PATH) && delete_dir_file($LOG_PATH)) {
            $this->success('清除缓存成功!');
        } else {
            $this->error('清除缓存失败!');
        }
    }
}
