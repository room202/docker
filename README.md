# Docker

## インストール方法

### 事前準備

#### Windowsの機能の有効化
- Windowsスタートボタンの右横にある検索バーで「Windowsの機能の有効化または無効化」と検索する
- 検索にヒットした「Windowsの機能の有効化または無効化」をクリックして起動する
- 下記項目のチェックをONにする
  - 「Linux用windowsサブシステム」
  - 「仮想マシンプラットフォーム」
#### x64マシン用WSL2 Linuxカーネル更新プログラムパッケージのダウンロードとインストール
- 下記ファイルをダウンロードしてインストールする  
  https://wslstorestorage.blob.core.windows.net/wslblob/wsl_update_x64.msi

### Docker のインストール  
http://docs.docker.com/desktop/install/windows-install/

## Dockerの起動コマンド

 ```bash
# Docker起動
docker compose up -d

# Docker終了
docker compose down
```

