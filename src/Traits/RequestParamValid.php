<?php


namespace Byh\LaravelKit\Traits;

use Byh\LaravelKit\Exceptions\RequestParamsValidException;
use Illuminate\Support\Facades\Validator;

/**
 * 请求参数校验
 * Class RequestParamValid
 * @package Byh\LaravelKit\Traits
 */
class RequestParamValid
{
    public function valid(array $data, array $rules, array $messages = [], array $customAttributes = [])
    {
        $validator = Validator::make($data, $rules, $messages, $customAttributes);
        if ($validator->fails()) throw new RequestParamsValidException($validator->errors()->first());
    }
}
