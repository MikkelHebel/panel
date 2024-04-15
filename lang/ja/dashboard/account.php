<?php

return [
    'email' => [
        'title' => 'メールアドレスの更新',
        'updated' => 'メールアドレスが更新されました。',
    ],
    'password' => [
        'title' => 'パスワードの変更',
        'requirements' => '新しいパスワードは8文字以上である必要があります。',
        'updated' => 'パスワードが更新されました。',
    ],
    'two_factor' => [
        'button' => '2段階認証の設定',
        'disabled' => '二段階認証があなたのアカウントで無効になっています。ログイン時にトークンを提供するように求められなくなります。',
        'enabled' => '二段階認証がアカウントで有効になりました！ これからログインする際には、デバイスによって生成されたコードを入力する必要があります。',
        'invalid' => '入力されたトークンは無効です。',
        'setup' => [
            'title' => '二段階認証のセットアップ',
            'help' => 'コードをスキャンできませんか？以下のコードをアプリケーションに入力してください:',
            'field' => 'トークンを入力',
        ],
        'disable' => [
            'title' => '二段階認証を無効にする',
            'field' => 'トークンを入力',
        ],
    ],
];
