<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attributeを承認してください。',
    'accepted_if'          => ':Otherが:valueの場合、:attributeを承認する必要があります。',
    'active_url'           => ':Attributeは、有効なURLではありません。',
    'after'                => ':Attributeには、:dateより後の日付を指定してください。',
    'after_or_equal'       => ':Attributeには、:date以降の日付を指定してください。',
    'alpha'                => ':Attributeには、アルファベッドのみ使用できます。',
    'alpha_dash'           => ':Attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')とハイフンと下線(\'-\',\'_\')が使用できます。',
    'alpha_num'            => ':Attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')が使用できます。',
    'array'                => ':Attributeには、配列を指定してください。',
    'before'               => ':Attributeには、:dateより前の日付を指定してください。',
    'before_or_equal'      => ':Attributeには、:date以前の日付を指定してください。',
    'between'              => [
        'array'   => ':Attributeの項目は、:min個から:max個にしてください。',
        'file'    => ':Attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'numeric' => ':Attributeには、:minから、:maxまでの数字を指定してください。',
        'string'  => ':Attributeは、:min文字から:max文字にしてください。',
    ],
    'boolean'              => ':Attributeには、\'true\'か\'false\'を指定してください。',
    'confirmed'            => ':Attributeと:attribute確認が一致しません。',
    'current_password'     => 'パスワードが正しくありません。',
    'date'                 => ':Attributeは、正しい日付ではありません。',
    'date_equals'          => ':Attributeは:dateに等しい日付でなければいけません。',
    'date_format'          => ':Attributeの形式が\':format\'と一致しません。',
    'declined'             => ':Attributeを拒否する必要があります。',
    'declined_if'          => ':Otherが:valueの場合、:attributeを拒否する必要があります。',
    'different'            => ':Attributeと:otherには、異なるものを指定してください。',
    'digits'               => ':Attributeは、:digits桁にしてください。',
    'digits_between'       => ':Attributeは、:min桁から:max桁にしてください。',
    'dimensions'           => ':Attributeの画像サイズが無効です',
    'distinct'             => ':Attributeの値が重複しています。',
    'doesnt_end_with'      => ':Attributeは次のいずれかで終わってはいけません。: :values',
    'doesnt_start_with'    => ':Attributeは次のうちいずれかで始まってはいけません。: :values',
    'email'                => ':Attributeは、有効なメールアドレス形式で指定してください。',
    'ends_with'            => ':Attributeは、次のうちのいずれかで終わらなければいけません。: :values',
    'enum'                 => '選択した :attributeは 無効です。',
    'exists'               => '選択された:attributeは、有効ではありません。',
    'file'                 => ':Attributeはファイル形式でなければいけません。',
    'filled'               => ':Attributeは必須です。',
    'gt'                   => [
        'array'   => ':Attributeの項目数は、:value個より多くなければいけません。',
        'file'    => ':Attributeは、:value KBより大きくなければいけません。',
        'numeric' => ':Attributeは、:valueより大きくなければいけません。',
        'string'  => ':Attributeは、:value文字より大きくなければいけません',
    ],
    'gte'                  => [
        'array'   => ':Attributeの項目数は、:value個以上でなければいけません。',
        'file'    => ':Attributeは、:value KB以上でなければいけません。',
        'numeric' => ':Attributeは、:value以上でなければいけません。',
        'string'  => ':Attributeは、:value文字以上でなければいけません。',
    ],
    'image'                => ':Attributeには、画像を指定してください。',
    'in'                   => '選択された:attributeは、有効ではありません。',
    'in_array'             => ':Attributeが:otherに存在しません。',
    'integer'              => ':Attributeには、整数を指定してください。',
    'ip'                   => ':Attributeには、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':AttributeはIPv4アドレスを指定してください。',
    'ipv6'                 => ':AttributeはIPv6アドレスを指定してください。',
    'json'                 => ':Attributeには、有効なJSON文字列を指定してください。',
    'lt'                   => [
        'array'   => ':Attributeの項目数は、:value個より少なくなければいけません。',
        'file'    => ':Attributeは、:value KBより小さくなければいけません。',
        'numeric' => ':Attributeは、:valueより小さくなければいけません。',
        'string'  => ':Attributeは、:value文字より小さくなければいけません。',
    ],
    'lte'                  => [
        'array'   => ':Attributeの項目数は、:value個以下でなければいけません。',
        'file'    => ':Attributeは、:value KB以下でなければいけません。',
        'numeric' => ':Attributeは、:value以下でなければいけません。',
        'string'  => ':Attributeは、:value文字以下でなければいけません。',
    ],
    'mac_address'          => ':Attributeは有効なMACアドレスである必要があります。',
    'max'                  => [
        'array'   => ':Attributeの項目数は、:max個以下でなければいけません。',
        'file'    => ':Attributeは、:max KB以下のファイルでなければいけません。',
        'numeric' => ':Attributeは、:max以下の数字でなければいけません。',
        'string'  => ':Attributeの文字数は、:max文字以下でなければいけません。',
    ],
    'max_digits'           => ':Attributeは、:max桁以下の数字でなければいけません。',
    'mimes'                => ':Attributeには、以下のファイルタイプを指定してください。:values',
    'mimetypes'            => ':Attributeには、以下のファイルタイプを指定してください。:values',
    'min'                  => [
        'array'   => ':Attributeの項目数は、:min個以上にしてください。',
        'file'    => ':Attributeには、:min KB以上のファイルを指定してください。',
        'numeric' => ':Attributeには、:min以上の数字を指定してください。',
        'string'  => ':Attributeの文字数は、:min文字以上でなければいけません。',
    ],
    'min_digits'           => ':Attributeは、:min桁以上の数字でなければいけません。',
    'multiple_of'          => ':Attributeは:valueの倍数でなければいけません',
    'not_in'               => '選択された:attributeは、有効ではありません。',
    'not_regex'            => ':Attributeの形式が正しくありません。',
    'numeric'              => ':Attributeには、数字を指定してください。',
    'password'             => [
        'letters'       => ':Attributeは文字を1文字以上含める必要があります。',
        'mixed'         => ':Attributeは大文字と小文字をそれぞれ1文字以上含める必要があります。',
        'numbers'       => ':Attributeは数字を1文字以上含める必要があります。',
        'symbols'       => ':Attributeは記号を1文字以上含める必要があります。',
        'uncompromised' => ':Attributeは情報漏洩した可能性があります。他の:attributeを選択してください。',
    ],
    'present'              => ':Attributeが存在している必要があります。',
    'prohibited'           => ':Attributeの入力は禁止されています。',
    'prohibited_if'        => ':Otherが:valueの場合は、:Attributeの入力が禁止されています。',
    'prohibited_unless'    => ':Otherが:valuesでない限り、:Attributeの入力は禁止されています。',
    'prohibits'            => ':Otherが存在している場合、:Attributeの入力は禁止されています。',
    'regex'                => ':Attributeには、正しい形式を指定してください。',
    'required'             => ':Attributeは必須項目です。',
    'required_array_keys'  => ':Attributeには、:valuesのエントリを含める必要があります。',
    'required_if'          => ':Otherが:valueの場合、:attributeを指定してください。',
    'required_if_accepted' => ':Otherを承認した場合、:attributeは必須項目です。',
    'required_unless'      => ':Otherが:values以外の場合、:attributeは必須項目です。',
    'required_with'        => ':Valuesが入力されている場合、:attributeは必須項目です。',
    'required_with_all'    => ':Valuesが全て指定されている場合、:attributeは必須項目です。',
    'required_without'     => ':Valuesが入力されていない場合、:attributeは必須項目です。',
    'required_without_all' => ':Valuesが全て指定されていない場合、:attributeを指定してください。',
    'same'                 => ':Attributeと:otherが一致しません。',
    'size'                 => [
        'array'   => ':Attributeの項目数は、:size個にしてください。',
        'file'    => ':Attributeには、:size KBのファイルを指定してください。',
        'numeric' => ':Attributeには、:sizeを指定してください。',
        'string'  => ':Attributeの文字数は、:size文字にしてください。',
    ],
    'starts_with'          => ':Attributeは、次のいずれかで始まる必要があります。:values',
    'string'               => ':Attributeには、文字列を指定してください。',
    'timezone'             => ':Attributeには、有効なタイムゾーンを指定してください。',
    'unique'               => '指定の:attributeは既に使用されています。',
    'uploaded'             => ':Attributeのアップロードに失敗しました。',
    'url'                  => ':Attributeは、有効なURL形式で指定してください。',
    'uuid'                 => ':Attributeは、有効なUUIDでなければいけません。',

    'attributes' => [
        'title' => 'タイトル',
        'content' => '本文'
    ]
];
