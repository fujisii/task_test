# memo

## 簡易的にサーバーを立ち上げる

```shell
php artisan serve
```

## デバッグバーのインストール

```shell
composer requirebarryvdh/laravel-debugbar
```

## デバッグバーの表示・非表示切り替え

### .envファイル

- APP_DEBUG=true でデバッグバーを表示する

```shell
APP_DEBUG=true
```

## キャッシュのクリア方法

```shell
$ php artisan cache:clear
Application cache cleared!

$ php artisan config:clear
Configuration cache cleared!
```
