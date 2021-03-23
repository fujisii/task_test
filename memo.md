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
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```