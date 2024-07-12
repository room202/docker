# そのイメージファイルを使うか指定
FROM python:3.10

# どのディレクトリで作業するか指定
WORKDIR /usr/src/app

# どのpythonコマンドを実行するか指定
RUN pip install flask==3.0.2

# どのコマンドを実行するか指定
CMD ["flask", "run", "--host=0.0.0.0"]