<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: Packagetest.php
 * Description:
 *
 * @author shiquan
 * @Create Date    2020/9/24 13:56
 * @Update Date    2020/9/24 13:56 By shiquan
 * @version V1.0
 */

namespace Shiquan\Packagetest;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Packagetest
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){
        return rand(10000,2002020);
    }
}