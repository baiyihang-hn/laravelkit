<?php


namespace Byh\LaravelKit\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static array success($data = null, string $message = '成功', int $code = 200)
 * @method static array fail($error = null, string $message = '失败', int $code = 400)
 * @method static array unauthorized($error = null, string $message = '不被允许的请求', int $code = 401)
 * @method static array loginExpire(string $message = '登录已失效', int $code = 402)
 * @method static array requestParamsValidError($error = null, string $message = '请求参数不合法', int $code = 403)
 * Class ApiResponse
 * @package Byh\LaravelKit\Facades
 */
class ApiResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Byh\LaravelKit\ApiResponse::class;
    }
}
