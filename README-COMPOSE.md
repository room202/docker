# コンテナの作成に関わる : docker compose

- 複数のコンテナをまとめて起動できる
- YAML形式で記述する
- ファイル名は`compose.yaml`から`compose.yml`

```bash
docker compose up
docker compose dows
docker compose ps
docker compose exec
```


| コマンド                           | イメージのビルド                           | コンテナの作成 | コンテナの実行 |
| ---------------------------------- | ------------------------------------------ | -------------- | -------------- |
| build                              | ○                                          |                |                |
| start                              |                                            |                | ○              |
| up                                 | △ (対象のイメージがない場合にビルドを実施) | ○              | ○              |
| up --build                         | ○                                          | ○              | ○              |
| run (特定のコンテナのみが操作対象) | △ (対象のイメージがない場合にビルドを実施) |                | ○              |

## コンテナの停止や削除に関わる docker compose コマンド

| コマンド       | コンテナの停止 | コンテナの削除 | イメージの削除 |
| -------------- | -------------- | -------------- | -------------- |
| stop           | ○              |                |                |
| rm             |                | ○              |                |
| rm -s          | ○              | ○              |                |
| down           | ○              | ○              |                |
| down --rmi all | ○              | ○              | ○              |

## Docker の起動コマンド

```bash
# Docker起動
docker compose up -d

# Docker終了
docker compose down
```
