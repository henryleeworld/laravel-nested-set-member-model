# Laravel 8 巢狀會員資料表

引入 kalnoy 的 nestedset 套件來擴增實作方便處理樹狀節點資料結構的資料模型，可以讓我們在不需要遍歷整顆樹的情況下，用極少的主機資源獲取節點、計算節點數量或是映射關連資料表。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/member/relationship/{id}` 來取得該編號會員及其推廣的會員。

----

## 畫面截圖
![](https://i.imgur.com/9eodqtD.png)
> 發展新加入者，或者通過組織者或其他人發展其他新加入者成為參加者的推廣會員
