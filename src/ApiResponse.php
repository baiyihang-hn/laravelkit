<?php


namespace Byh\LaravelKit;


use Illuminate\Config\Repository;


class ApiResponse
{
    protected $config;
    protected $codeMsg;
    protected $status;
    public function __construct(Repository $repository)
    {
        $this->config = $repository->get('apiresponse');
        $this->codeMsg = $this->config['codeMsg'];
        $this->status = $this->config['status'];
    }

    /**
     * 操作成功
     * @param null $data 返回携带数据
     * @param string $message 描述信息
     * @param int $code 状态码，默认200
     * @return array
     */
    public function success($data = null, string $message = '成功', int $code = 200): array
    {
        $result = $this->getResult(__FUNCTION__, $code, $message);
        $result['data'] = $data;
        $result['error'] = null;
        return $result;
    }

    /**
     * 操作失败
     * @param string $error 失败原因
     * @param string $message 描述信息
     * @param int $code 状态码，默认400
     * @return array
     */
    public function fail($error = null, string $message = '失败', int $code = 400): array
    {
        $result = $this->getResult(__FUNCTION__, $code, $message);
        $result['data'] = null;
        $result['error'] = $error;
        return $result;
    }

    /**
     * 请求不被允许
     * @param string $error 失败原因
     * @param string $message 描述信息
     * @param int $code 状态码，默认401
     * @return array
     */
    public function unauthorized($error = '', string $message = '不被允许的请求', int $code = 401): array
    {
        $result = $this->getResult(__FUNCTION__, $code, $message);
        $result['data'] = null;
        $result['error'] = $error;
        return $result;
    }

    /**
     * 登录失效
     * @param string $message 描述信息
     * @param int $code 状态码，默认402
     * @return array
     */
    public function loginExpire(string $message = '登录已失效', int $code = 402): array
    {
        $result = $this->getResult(__FUNCTION__, $code, $message);
        $result['data'] = null;
        $result['error'] = '';
        return $result;
    }

    /**
     * 如果config下apiresponse中自定义了codeMsg，则进行codeMsg覆盖
     * @param string $type codeMsg类型
     * @param int $code 返回值code
     * @param string $message 返回值message
     * @return array
     */
    private function getResult(string $type, int $code, string $message): array
    {
        $result = array('code' => $code, 'message' => $message);
        if (isset($this->codeMsg[$type])) {
            $result = $this->codeMsg[$type];
        }
        $result['status'] = $this->getStatus($code);
        return $result;
    }

    /**
     * 根据code值获取status值，status定义在config下apiresponse中
     * @param int $code
     * @return string
     */
    private function getStatus(int $code): string
    {
        $s = '';
        foreach ($this->status as $key => $value) {
            if ($code >= $value[0] && $code <= $value[1]) {
                $s = $key;
            }
        }
        return $s;
    }
}
