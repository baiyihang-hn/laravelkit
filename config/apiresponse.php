<?php

return [
    /**
     * 默认返回值。可更改
     * 'success' => ['code' => 200, 'message' => '成功'],
     * 'fail' => ['code' => 400, 'message' => '失败'],
     * 'unauthorized' => ['code' => 401, 'message' => '不被允许的请求'],
     * 'loginExpire' => ['code' => 402, 'message' => '登录已失效'],
     * 'requestParamsValidError' => ['code' => 403, 'message' => '请求参数不合法'],
     */
    'codeMsg' => [

    ],

    /**
     * 默认状态对应code码,可更改
     */
    'status' => [
        'success' => [200, 299],
        'fail' => [400, 499],
        'error' => [500, 599]
    ]
];
