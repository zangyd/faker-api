<?php
/**
 * @copyright   Copyright (c) ZacharyAll rights reserved.
 *
 * Faker    API协助接口控制器
 *
 * @author      zachary <zangyd@163.com>
 * @date        2017/4/20
 */

namespace app\api\controller\v1;

use app\api\controller\Faker;
use think\Config;

class Index extends Faker
{
    /**
     * 方法路由器
     * @access protected
     * @return array
     */
    protected static function initMethod()
    {
        return [
            // API访问测试
            'get.index.host'      => ['getIndexHost', false],
            // 清空所有缓存
            'clear.cache.all'     => ['clearCacheAll', 'app\common\service\Index'],
            // 调整最优状态(正式环境有效)
            'set.system.optimize' => ['setSystemOptimize', 'app\common\service\Index'],
            // 获取系统版本号
            'get.system.version'  => ['getVersion', 'app\common\service\Index'],
        ];
    }

    /**
     * 测试远程访问API接口是否通过
     * 请不要删除或修改,否则无法申请Faker官方云服务
     * @access protected
     * @return array
     */
    protected function getIndexHost()
    {
        $data['system'] = Config::get('Faker.product');
        $data['verification'] = $this->getParams();

        return $data;
    }
}
