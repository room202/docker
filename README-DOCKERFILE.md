# Dockerfile の活用例

## Dockerfile の基礎

ファイル名 : Dockerfile

```Dockerfile
# ベースイメージを指定する
FROM ubuntu:22.04

# コマンド実行
RUN apt-get update
RUN apt-get install -y vim

# 環境変数を設定
# MySQLのタイムゾーンを設定
ENV TZ=Asia/Tokyo

# ホストマシンのファイルをイメージに追加
COPY ./my.cnf /etc/my.cnf

# コンテナ起動時のコマンドを指定する
CMD ["/usr/local/bin/python3", "-m", "http.server", "8080"]
```

```bash
# イメージの作成
docker image build --tag my-ubuntu:22.04 .

# コンテナ作成と実行
docker container run my-ubuntu:22.04 which vi
docker container run -it my-ubuntu:22.04 vi
```

