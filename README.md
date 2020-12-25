## 开始

- php artisan vendor:publish --provider="byh\laravel-kit\ApiResponseServiceProvider"
- 自定义apiresponse配置文件

## 使用

    public function testSuccess()
    {
        return ApiResponse::success('hahaha');
    }

    public function testFail()
    {
        return ApiResponse::fail('errrrrrr');
    }

## 默认值
### codeMsg
    'codeMsg' => [
                'success' => ['code' => 200, 'message' => '成功'],
                'fail' => ['code' => 400, 'message' => '失败'],
                'unauthorized' => ['code' => 401, 'message' => '不被允许的请求'],
                'loginExpire' => ['code' => 402, 'message' => '登录已失效'],
            ],
    
### status
    'status' => [
                'success' => [200, 299],
                'fail' => [400, 499],
                'error' => [500, 599]
            ]
