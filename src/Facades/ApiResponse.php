<?php


namespace Byh\LaravelKit\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static array success($data = null, string $message = '成功', int $code = 200)
 * @method static array fail($error = '', string $message = '失败', int $code = 400)
 * @method static array unauthorized($error = '', string $message = '不被允许的请求', int $code = 401)
 * @method static array loginExpire(string $message = '登录已失效', int $code = 402)
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
