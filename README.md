# Laravel 10 線上旅行社模擬功能測試

公寓、飯店因線上旅行社（OTA）能帶來可觀的流量而選擇與其建立合作關係，以增加曝光度、提升聲譽、填補住房淡季、提高銷售額、獲得競爭優勢等，對於旅客來說，住宿的價格是決定旅程的首要考量，但疫情讓旅程取消的彈性重視度緊隨其後。

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
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 運行功能測試，主要測試大部分的程式碼，包含一些物件如何進行互動，甚至是完整的 HTTP 請求到一個 JSON 端點。
```sh
$ php artisan test
```

----

## 畫面截圖
![](https://i.imgur.com/4WblCxY.png)
> 挑選公寓、飯店等各類絕佳住宿，提供旅客多元的住宿選擇