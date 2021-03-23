# memo

## 簡易的にサーバーを立ち上げる

```shell
php artisan serve
```

## 71. Laravelの初期設定

### デバッグバーのインストール

```shell
composer requirebarryvdh/laravel-debugbar
```

### デバッグバーの表示・非表示切り替え

- .envファイルでデバッグバーの表示を制御している
- APP_DEBUG=true でデバッグバーを表示する

```shell
APP_DEBUG=true
```

## 72. Laravel キャッシュのクリア方法

```shell
$ php artisan cache:clear
Application cache cleared!

$ php artisan config:clear
Configuration cache cleared!
```

## 73. Laravel データベース設定

### .envファイル

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_task
DB_USERNAME=laravel_user
DB_PASSWORD=password123
```

## 74. Laravel データベース接続確認

- Laravelにはインストールした時にデータベースのテーブルを作成する仕組みが備わっている

```shell
$ php artisan migrate
```

## 75. Laravelの概要

### MVCモデル

- Model : データベースとやりとり
- View : 見た目
- Controller : 処理
- Routing : アクセスの振り分け
- Migration : DBテーブルの履歴管理

## 76. Laravel ルート、ビュー

### 画面を表示するまでの流れ

1. routes/web.php
2. ルートにきたらwelcomeビューを呼び出す

```php
Route::get('/', function () {
    return view('welcome');
});
```

3. resources/views/welcome.blade.php
4. ビューを画面に表示する

## 77. Laravel Artisanコマンド

### Artisan (職人)

```shell
# コマンドのリスト
$ php artisan list
```
