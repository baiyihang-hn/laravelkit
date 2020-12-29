<?php


namespace Byh\LaravelKit\Traits;

use Byh\LaravelKit\Exceptions\RequestParamsValidateException;
use Illuminate\Support\Facades\Validator;

/**
 * 请求参数校验
 * Class RequestValidate
 * @package Byh\LaravelKit\Traits
 */
trait RequestValidate
{
    /**
     * @param array $data
     * @param array $rules
     * @param array $messages
     * @param array $customAttributes
     * @throws RequestParamsValidateException
     */
    public function paramsValidate(array $data, array $rules, array $messages = [], array $customAttributes = [])
    {
        $validator = Validator::make($data, $rules, $messages, $customAttributes);
        if ($validator->fails()) throw new RequestParamsValidateException($validator->errors()->first());
    }
}
