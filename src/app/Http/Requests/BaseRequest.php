<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Exceptions\ValidationException;

abstract class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * バリデーション失敗時
     *
     * @param Validator $validator
     * @throws ValidationException
     *
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $key = $validator->errors()->keys()[0];
        // 一番最初のバリデーションエラーメッセージをExceptionのメッセージにしてエラーログ出力する
        // `11:システムエラー` になる時のみのログ出力です
        // `10 : 正常系エラー（ユーザー入力エラー）`はエラーログ出力されません
        $exception = new ValidationException($key . ': ' . $validator->errors()->first($key));
        throw $exception;
    }
}
