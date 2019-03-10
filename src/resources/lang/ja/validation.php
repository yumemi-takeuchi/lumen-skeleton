<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'             => ':attributeを承認してください。',
    'active_url'           => ':attributeには有効なURLを指定してください。',
    'after'                => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attributeには:date以降の日付を指定してください。',
    'alpha'                => ':attributeには英字のみからなる文字列を指定してください。',
    'alpha_dash'           => ':attributeには英数字・ハイフン・アンダースコアのみからなる文字列を指定してください。',
    'alpha_num'            => ':attributeには英数字のみからなる文字列を指定してください。',
    'array'                => ':attributeには配列を指定してください。',
    'before'               => ':attributeには:dateより前の日付を指定してください。',
    'before_or_equal'      => ':attributeには:date以前の日付を指定してください。',
    'between'              => [
        // 'numeric' => ':attributeには:min〜:maxまでの数値を指定してください。',
        'numeric' => ':min〜:maxまでの範囲で入力してください。',
        'file'    => ':attributeには:min〜:max KBのファイルを指定してください。',
        // 'string'  => ':attributeには:min〜:max文字の文字列を指定してください。',
        'string'  => ':min文字以上、:max文字以下で登録ください。',
        'array'   => ':attributeには:min〜:max個の要素を持つ配列を指定してください。',
    ],
    'boolean'              => ':attributeには真偽値を指定してください。',
    'confirmed'            => ':attributeが確認用の値と一致しません。',
    // 'date'                 => ':attributeには正しい形式の日付を指定してください。',
    'date'                 => '正しい形式の日付を指定してください。',
    'date_format'          => '":format"という形式の日付を指定してください。',
    'different'            => ':attributeには:otherとは異なる値を指定してください。',
    'digits'               => ':attributeには:digits桁の数値を指定してください。',
    'digits_between'       => ':attributeには:min〜:max桁の数値を指定してください。',
    'dimensions'           => ':attributeの画像サイズが不正です。',
    'distinct'             => '指定された:attributeは既に存在しています。',
    'email'                => ':attributeには正しい形式のメールアドレスを指定してください。',
    'exists'               => '指定された:attributeは存在しません。',
    'file'                 => ':attributeにはファイルを指定してください。',
    'filled'               => ':attributeには空でない値を指定してください。',
    'image'                => ':attributeには画像ファイルを指定してください。',
    'in'                   => ':attributeには:valuesのうちいずれかの値を指定してください。',
    'in_array'             => ':attributeが:otherに含まれていません。',
    'integer'              => ':attributeには整数を指定してください。',
    'ip'                   => ':attributeには正しい形式のIPアドレスを指定してください。',
    'ip4'                  => ':attributeにはIPv4形式のIPアドレスを指定してください。',
    'ip6'                  => ':attributeにはIPv6形式のIPアドレスを指定してください。',
    'json'                 => ':attributeには正しい形式のJSON文字列を指定してください。',
    'max'                  => [
        'numeric' => ':attributeには:max以下の数値を指定してください。',
        'file'    => ':attributeには:max KB以下のファイルを指定してください。',
        'string'  => ':attributeには:max文字以下の文字列を指定してください。',
        'array'   => ':attributeには:max個以下の要素を持つ配列を指定してください。',
    ],
    'mimes'                => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'mimetypes'            => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attributeには:min以上の数値を指定してください。',
        'file'    => ':attributeには:min KB以上のファイルを指定してください。',
        'string'  => ':attributeには:min文字以上の文字列を指定してください。',
        'array'   => ':attributeには:min個以上の要素を持つ配列を指定してください。',
    ],
    'not_in'               => ':attributeには:valuesのうちいずれとも異なる値を指定してください。',
    'numeric'              => ':attributeには数値を指定してください。',
    'present'              => ':attributeがありません。',
    'regex'                => '正しい形式の:attributeを指定してください。',
    // 'required'             => ':attributeは必須です。',
    'required'             => '入力されていません。',

    'required_if'          => ':otherが:valueの時:attributeは必須です。',
    'required_unless'      => ':otherが:values以外の時:attributeは必須です。',
    'required_with'        => ':valuesのうちいずれかが指定された時:attributeは必須です。',
    'required_with_all'    => ':valuesのうちすべてが指定された時:attributeは必須です。',
    'required_without'     => ':valuesのうちいずれかがが指定されなかった時:attributeは必須です。',
    'required_without_all' => ':valuesのうちすべてが指定されなかった時:attributeは必須です。',
    'same'                 => ':attributeが:otherと一致しません。',
    'size'                 => [
        'numeric' => ':attributeには:sizeを指定してください。',
        'file'    => ':attributeには:size KBのファイルを指定してください。',
        'string'  => ':attributeには:size文字の文字列を指定してください。',
        'array'   => ':attributeには:size個の要素を持つ配列を指定してください。',
    ],
    'string'               => ':attributeには文字列を指定してください。',
    'timezone'             => ':attributeには正しい形式のタイムゾーンを指定してください。',
    'unique'               => 'その:attributeはすでに使われています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeには正しい形式のURLを指定してください。',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];
// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines contain the default error messages used by
//     | the validator class. Some of these rules have multiple versions such
//     | as the size rules. Feel free to tweak each of these messages here.
//     |
//     */

//     'accepted'             => 'The :attribute must be accepted.',
//     'active_url'           => 'The :attribute is not a valid URL.',
//     'after'                => 'The :attribute must be a date after :date.',
//     'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
//     'alpha'                => 'The :attribute may only contain letters.',
//     'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
//     'alpha_num'            => 'The :attribute may only contain letters and numbers.',
//     'array'                => 'The :attribute must be an array.',
//     // 'before'               => 'The :attribute must be a date before :date.',
//     'before'               => ':dateより前の日を設定してください。',
//     'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
//     'between'              => [
//         'numeric' => 'The :attribute must be between :min and :max.',
//         'file'    => 'The :attribute must be between :min and :max kilobytes.',
//         'string'  => 'The :attribute must be between :min and :max characters.',
//         'array'   => 'The :attribute must have between :min and :max items.',
//     ],
//     'boolean'              => 'The :attribute field must be true or false.',
//     'confirmed'            => 'The :attribute confirmation does not match.',
//     // 'date'                 => 'The :attribute is not a valid date.',
//     'date'                 => '正しい日付を入れてください。',
//     'date_format'          => 'The :attribute does not match the format :format.',
//     'different'            => 'The :attribute and :other must be different.',
//     'digits'               => 'The :attribute must be :digits digits.',
//     'digits_between'       => 'The :attribute must be between :min and :max digits.',
//     'dimensions'           => 'The :attribute has invalid image dimensions.',
//     'distinct'             => 'The :attribute field has a duplicate value.',
//     'email'                => 'The :attribute must be a valid email address.',
//     'exists'               => 'The selected :attribute is invalid.',
//     'file'                 => 'The :attribute must be a file.',
//     'filled'               => 'The :attribute field must have a value.',
//     'image'                => 'The :attribute must be an image.',
//     'in'                   => 'The selected :attribute is invalid.',
//     'in_array'             => 'The :attribute field does not exist in :other.',
//     // 'integer'              => 'The :attribute must be an integer.',
//     'integer'              => '整数を入力してください。',
//     'ip'                   => 'The :attribute must be a valid IP address.',
//     'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
//     'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
//     'json'                 => 'The :attribute must be a valid JSON string.',
//     'max'                  => [
//         'numeric' => 'The :attribute may not be greater than :max.',
//         'file'    => 'The :attribute may not be greater than :max kilobytes.',
//         'string'  => 'The :attribute may not be greater than :max characters.',
//         'array'   => 'The :attribute may not have more than :max items.',
//     ],
//     'mimes'                => 'The :attribute must be a file of type: :values.',
//     'mimetypes'            => 'The :attribute must be a file of type: :values.',
//     'min'                  => [
//         'numeric' => 'The :attribute must be at least :min.',
//         'file'    => 'The :attribute must be at least :min kilobytes.',
//         'string'  => 'The :attribute must be at least :min characters.',
//         'array'   => 'The :attribute must have at least :min items.',
//     ],
//     'not_in'               => 'The selected :attribute is invalid.',
//     'numeric'              => 'The :attribute must be a number.',
//     'present'              => 'The :attribute field must be present.',
//     'regex'                => 'The :attribute format is invalid.',
//     // 'required'             => 'The :attribute field is required.',
//     'required'             => '必須です。',
//     'required_if'          => 'The :attribute field is required when :other is :value.',
//     'required_unless'      => 'The :attribute field is required unless :other is in :values.',
//     'required_with'        => 'The :attribute field is required when :values is present.',
//     'required_with_all'    => 'The :attribute field is required when :values is present.',
//     'required_without'     => 'The :attribute field is required when :values is not present.',
//     'required_without_all' => 'The :attribute field is required when none of :values are present.',
//     'same'                 => 'The :attribute and :other must match.',
//     'size'                 => [
//         'numeric' => 'The :attribute must be :size.',
//         'file'    => 'The :attribute must be :size kilobytes.',
//         'string'  => 'The :attribute must be :size characters.',
//         'array'   => 'The :attribute must contain :size items.',
//     ],
//     'string'               => 'The :attribute must be a string.',
//     'timezone'             => 'The :attribute must be a valid zone.',
//     'unique'               => 'The :attribute has already been taken.',
//     'uploaded'             => 'The :attribute failed to upload.',
//     'url'                  => 'The :attribute format is invalid.',

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | Here you may specify custom validation messages for attributes using the
//     | convention "attribute.rule" to name the lines. This makes it quick to
//     | specify a specific custom language line for a given attribute rule.
//     |
//     */

//     'custom' => [
//         'attribute-name' => [
//             'rule-name' => 'custom-message',
//         ],
//     ],

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Attributes
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines are used to swap attribute place-holders
//     | with something more reader friendly such as E-Mail Address instead
//     | of "email". This simply helps us make messages a little cleaner.
//     |
//     */

//     'attributes' => [],

// ];
