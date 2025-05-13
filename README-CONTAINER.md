# コンテナの基本操作 : dokcer container

- コンテナはイメージから作られる
- `docker run`は旧式コマンドで、`docker container run`と同じ

## コンテナを起動する

`docker container run`

```bash
# 練習用コマンド : Hello World
docker container run hello-world

# 練習用コマンド : Ubuntu
docker container run -it ubuntu

# Ubuntuコマンドで動作確認
whoami
cat /etc/os-release
echo $SHELL

# 練習用コマンド : Ubuntu
docker container run ubuntu whoami
```

## コンテナ一覧を確認する

```bash
docker container ls
docker container ls --all
```

## コンテナを停止する

```bash
docker container stop [CONTAINER ID] or [NAMES]
docker container stop cb73dd3cc271
docker container stop blissful_mcclintock
```

## コンテナを削除する

```bash
docker container rm [CONTAINER ID] or [NAMES]
docker container rm cb73dd3cc271
docker container rm blissful_mcclintock

# 起動中のコンテナを矯正削除する
# 用途 : コンテナの停止と削除をまとめて行う
docker container rm -f cb73dd3cc271
docker container rm --force cb73dd3cc271
```

## コンテナ内でインライン実行

参考例 : Ruby をホストマシンにインストールしていなくても、コンテナ内でインライン実行する

```bash
docker container run ruby ruby -e 'print 40 + 2'
```

## コンテナに名前をつける

```bash
docker container run --name hello hello-world
```

## コンテナ停止時に自動で削除する

```bash
docker container run --name hello --rm hello-world
```

## コンテナを対話操作する

よく使うオプション : -it

| ショート      | ロング | 意味                         | 用途                   |
| ------------- | ------ | ---------------------------- | ---------------------- |
| --interactive | -i     | コンテナの標準入力に接続する | コンテナを対話操作する |
| --tty         | -t     | 疑似ターミナルを割り当てる   | コンテナを対話操作する |

```bash
docker container run --rm -it python python3
docker container run --rm --interactive --tty python python3
```

## コンテナのポートを公開する

```bash
docker container run --rm -p 8080:80 nginx
docker container run --rm --publish 8080:80 nginx
```

## コンテナの環境変数を設定する

```bash
# MySQLサーバーを起動する
docker container run --name db --rm --env MYSQL_ROOT_PASSWORD=secret --env MYSQL_USER=app --env MYSQL_PASSWORD=pass1234 --env MYSQL_DATABASE=sample --publish 3306:3306 mysql

# MySQLクライアント
mysql --host=127.0.0.1 --port=3306 --user=app --password=pass1234 sample
```

## コンテナをバックグラウンドで実行する

```bash
docker container run -d
docker container run --detach

# nginxをバックグラウンドで実行する
docker container run --rm -p 8080:80 -d nginx
```

## コンテナの出力を確認する

```bash
docker container logs -f ubuntu
docker container logs --follow ubuntu
```

ログ確認用(起動失敗するコマンド)

```bash
# 1. envオプションが無いので起動自体失敗する
docker container run --name db --rm --detach --publish 5432:5432 postgres

# 2. --rmを消して終了済みコンテナに残しておく
docker container run --name db --detach --env POSTGRES_PASSWORD=secret --publish 5432:5432 postgres

# 3. ログを確認してみる
docker container logs db
docker container logs -f db
```

## 起動中のコンテナに命令する

```bash
docker container exec db head /etc/os-release
```

run と exec の違い

run : コンテナを起動してコンテナ内で PID1 を生成する  
exec : すでに存在するコンテナで新たなプロセスを起動する

```bash
# コンテナ内でbashを実行してとどまる
docker container exec -it db bash
```
