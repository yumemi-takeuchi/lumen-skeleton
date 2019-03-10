# project-api
Project API


## ■php-cs-fixerの実行
```$xslt
cd src
./vendor/bin/php-cs-fixer --rules=@PSR2 fix ./app
```

## ■phpunitの実行

```$xslt
cd src
./vendor/bin/phpunit

# 失敗したら止める（デバッグ情報付き）
./vendor/bin/phpunit --stop-on-failure --debug

# クラスごと
./vendor/bin/phpunit tests/Feature/EstimateContractCourse/GetEstimateCourseListTest.php

```

## ■テーブルスキーマ作成　migrationの実行

* migration実行

```$xslt
cd src
php artisan migrate

# rollback
php artisan migrate:rollback

# rollbackを利用した全テーブル再作成migration
php artisan migrate:refresh

# rollbackを利用した全テーブル再作成migration
php artisan migrate:refresh

# dropテーブル後に全テーブル再作成migration
php artisan migrate:fresh
```

* 新しいmigrationファイルの作成

```$xslt
cd src
php artisan make:migration create_users_table
```

## ■テストデータ作成　seederの実行

* 新しいSeederクラスが作られたら composer dump-autoload を忘れずに。

```$xslt
cd src
php artisan db:seed

# 特定のSeederのみ実行
php artisan db:seed --class=MemberSeeder
```
