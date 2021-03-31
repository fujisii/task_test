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

## 78. Laravel モデル

### モデル（Model）DBとやりとり

```text
Eloquent（エロクアント）
ORM/ORマッパー
Object-Relational Mapping
オブジェクト関係マッピング

DBのやりとりをPHPで書ける
```

```shell
# この書き方だとappディレクトリ直下に作成される
$ php artisan make:model Test

# 実際の開発の現場ではModelsの下にphpファイルを作る
$ php artisan make:model Models/Test

# マイグレーションファイルをまとめて作る
$ php artisan make:model Models/Test -mc
```

## 79. Laravel マイグレーション

```shell
# DBテーブルの履歴管理
# モデルとセットになり、複数形で作成すること
# 例：Testモデルに対してtestsと複数形で作成すること
$ php artisan make:migration create_tests_table

# 実際にテーブルを作成する
$ php artisan migrate


$ php artisan migrate:fresh または refresh

# モデルは単数系 マイグレーションは複数形
# Person -> people
```

## 80. Laravel tinker

### tinker (DB簡易接続)

```shell
# 対話型でコマンドを打つことができる
$ php artisan tinker
Psy Shell v0.9.12 (PHP 7.3.24-(to be removed in future macOS) — cli) by Justin Hileman
>>> $test = new App\Models\Test;
=> App\Models\Test {#3246}
>>> $test->text = "aaa";
=> "aaa"
>>> $test->save();
=> true
>>> App\Models\Test::all();
=> Illuminate\Database\Eloquent\Collection {#3969
     all: [
       App\Models\Test {#3968
         id: 1,
         text: "aaa",
         created_at: "2021-03-26 22:52:01",
         updated_at: "2021-03-26 22:52:01",
       },
     ],
   }
>>> $test2 = new App\Models\Test;
=> App\Models\Test {#4179}
>>> $test2->text = "bbb";
=> "bbb"
>>> $test2->save();
=> true
>>> App\Models\Test::all();
=> Illuminate\Database\Eloquent\Collection {#4183
     all: [
       App\Models\Test {#4184
         id: 1,
         text: "aaa",
         created_at: "2021-03-26 22:52:01",
         updated_at: "2021-03-26 22:52:01",
       },
       App\Models\Test {#4185
         id: 2,
         text: "bbb",
         created_at: "2021-03-26 22:56:05",
         updated_at: "2021-03-26 22:56:05",
       },
     ],
   }
```

## 81. Laravel コントローラ

```shell
# コントローラを作成する
$ php artisan make:controller TestController
Controller created successfully.
```

## 82. Laravel MVCモデルの記述方法1

## 83. Laravel MVCモデルの記述方法2

## 84. ヘルパ関数

- ヘルパ関数とはLaravelが用意している便利な関数のこと
- よく使うもの
  - route, auth, app, bcrypt
  - collet, dd, env, factory, old, view, など
- https://readouble.com/laravel/6.x/ja/helpers.html

## 85. コレクション型

- コレクション型とは配列を拡張した型
- データベースからデータ取得時はコレクション型になっている
- コレクション型専用の関数多数
- メソッドチェーンで記述可能
- all, chunk, get, pluck, whereln, toArray
- https://readouble.com/laravel/6.x/ja/collections.html
