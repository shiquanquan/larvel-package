<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: Packagetest.php
 * Description:
 *
 * @author shiquan
 * @Create Date    2020/9/24 13:58
 * @Update Date    2020/9/24 13:58 By shiquan
 * @version V1.0
 */

namespace Shiquan\Packagetest\Facades;
use Illuminate\Support\Facades\Facade;
class Packagetest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packagetest';
    }
}