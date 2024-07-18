# イメージの設定
FROM python:3.10

# 作業ディレクトリの設定
WORKDIR /code   

# 指定ディレクトリにファイルを追加
ADD requirements.txt /code/

# 指定コマンドを実行
RUN pip install -r requirements.txt

# コマンドの実行
# python manage.py runserver 0.0.0.0:8000
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]