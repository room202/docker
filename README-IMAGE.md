# イメージの基本 : docker image

- 今後起動するすべてのコンテナに変更を反映したい場合は、コンテナではなくイメージを変更する必要がある

## イメージの一覧を確認する

```bash
docker image ls
```

## イメージを取得する

```bash
docker image pull ubuntu:23.10
docker image pull ubuntu:22.04
docker image pull ubuntu:latest

# イメージ一覧を表示
docker image ls
docker image ls ubuntu
```

## イメージの詳細を確認する

```bash
docker image pull ruby:3.2.2
docker image inspect ruby:3.2.2
```

## コンテナに vi をインストールする

```bash
docker container run --name myubuntu -it ubuntu:22.04 bash

apt update
apt install vi -y
```

## コンテナをイメージにする

```bash
docker container commit myubuntu vi-ubuntu:commit
```
