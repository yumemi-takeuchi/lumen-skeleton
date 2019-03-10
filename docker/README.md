# 開発環境用 docker-compose
ローカルのDockerでの開発環境構築。

## コンテナの作成
```
docker-compose build --no-cache
```

## 起動方法と停止
```
docker-compose up
docker-compose stop

# コンテナへのログイン
docker-compose exec php ash

# コンテナの削除
docker-compose down
```

## 設定方法
.envに環境変数があるので、ポートやDBの接続情報は 
それぞれ自分の環境に合わせて書き換えてください。

## アプリケーションの起動 (初回起動)
```
docker-compose exec php ash -c "cd src && composer install"
docker-compose exec php ash -c "cd src && php artisan migrate:refresh --seed"
```
