# Docker のインストール

## Windows の機能の有効化

- Windows スタートボタンの右横にある検索バーで「Windows の機能」と検索する
- 検索にヒットした「Windows の機能の有効化または無効化」をクリックして起動する
  ![](images/001.jpg)

- 下記項目のチェックを ON にする

  - 「Linux 用 windows サブシステム」
  - 「仮想マシンプラットフォーム」  
    ![](images/003.png)

  ![](images/005.png)

- 有効化されるまで待つ  
  ![](images/006.png)

- 消えてはいけないデータが無いか確認してから「今すぐ再起動」をクリック  
   ![](images/007.png)

## x64 マシン用 WSL2 Linux カーネル更新プログラムパッケージのダウンロードとインストール

- 下記 URL からファイルをダウンロード  
  https://wslstorestorage.blob.core.windows.net/wslblob/wsl_update_x64.msi

- ダウンロードしたファイルを起動  
  ![](images/008.png)

- 「Next」をクリック  
  ![](images/009.png)

- インストールされるまで待つ  
  ![](images/010.png)

- インストールが完了したら、「Finish」をクリック  
  ![](images/011.png)

## Docker のインストール

- 下記 URL からファイルをダウンロード  
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

- Docker のインストール完了  
  ![](images/021.png)

## エラー対策が発生した場合の解決策

### 「クラスが登録されていません」エラーが発生した場合

エラー内容

```
クラスが登録されていません
エラー コード: Wsl/CallMsi/Install/REGDB_E_CLASSNOTREG
```

解決策

下記サイトから`wsl.2.3.26.0.x64.msi`をダウンロードしてインストールする

https://github.com/microsoft/WSL/releases

### 「Docker Desktop - Unexpected WSL error」エラーが発生した場合

- 管理者権限でコマンドプロンプトを起動
- 下記コマンドを実行

```bash
wsl --update
```
