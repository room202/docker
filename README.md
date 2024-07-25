# Docker

## よく使うコマンド

![](images/102.png)

## インストール方法

### 事前準備

#### Windowsの機能の有効化
- Windowsスタートボタンの右横にある検索バーで「Windowsの機能」と検索する
- 検索にヒットした「Windowsの機能の有効化または無効化」をクリックして起動する
![](images/001.jpg)

- 下記項目のチェックをONにする
  - 「Linux用windowsサブシステム」
  - 「仮想マシンプラットフォーム」
  ![](images/003.png)  
  ![](images/005.png)

- 有効化されるまで待つ
  ![](images/006.png)

- 消えてはいけないデータが無いか確認してから「今すぐ再起動」をクリック
   ![](images/007.png)

#### x64マシン用WSL2 Linuxカーネル更新プログラムパッケージのダウンロードとインストール
- 下記URLからファイルをダウンロード  
  https://wslstorestorage.blob.core.windows.net/wslblob/wsl_update_x64.msi

- ダウンロードしたファイルを起動  
  ![](images/008.png)

- 「Next」をクリック  
  ![](images/009.png)

- インストールされるまで待つ  
  ![](images/010.png)

- インストールが完了したら、「Finish」をクリック  
  ![](images/011.png)

### Dockerのインストール  
- 下記URLからファイルをダウンロード  
  http://docs.docker.com/desktop/install/windows-install/

  ![](images/012.png)

- ダウンロードしたファイルを起動  
  ![](images/013.png)

- このまま「OK」をクリック  
  ![](images/014.png)

- インストールされるまで待つ  
  ![](images/015.png)

- ログアウトされるので、消えてはいけないデータが無いかを確認して「Close and log out」をクリック
  ![](images/016.png)

- 「Accept」をクリック  
  ![](images/017.png)

- このまま「Finish」をクリック  
  ![](images/018.jpg)

- 「Continue without signing in」をクリック
  ![](images/019.png)

- 「Skip survey」をクリック  
  ![](images/020.png)

- Dockerのインストール完了  
  ![](images/021.png)

## 「Docker Desktop - Unexpected WSL error」エラーが発生した場合の対処法
  - 管理者権限でコマンドプロンプトを起動
  - 下記コマンドを実行
  ```bash
  wsl --update
  ```
## Dockerの起動コマンド

 ```bash
# Docker起動
docker compose up -d

# Docker終了
docker compose down
```
