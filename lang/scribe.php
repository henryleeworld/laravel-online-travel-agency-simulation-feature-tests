<?php

return [
    "labels" => [
        "search" => "搜尋",
        "base_url" => "基礎路徑",
    ],

    "auth" => [
        "none" => "此 API 未經過認證。",
        "instruction" => [
            "query" => <<<TEXT
                若要認證請求，請在請求中包含查詢參數 **`:parameterName`**。
                TEXT,
            "body" => <<<TEXT
                若要認證請求，請在請求主體中包含參數 **`:parameterName`**。
                TEXT,
            "query_or_body" => <<<TEXT
                若要認證請求，請在查詢字串或請求主體中包含參數 **`:parameterName`**。
                TEXT,
            "bearer" => <<<TEXT
                若要認證請求，請包含一個帶有值 **`"Bearer :placeholder"`** 的 **`Authorization`** 標頭。
                TEXT,
            "basic" => <<<TEXT
                若要認證請求，請在 **`"Basic {credentials}"`** 格式中包含 **`Authorization`** 標頭。
                `{credentials}` 的值應該是您的使用者名稱/編號和密碼，並以冒號（:）連接 
                然後進行 Base64 編碼。
                TEXT,
            "header" => <<<TEXT
                若要認證請求，請包含一個帶有值 **`":placeholder"`** 的 **`:parameterName`** 標頭。
                TEXT,
        ],
        "details" => <<<TEXT
            在下面的文件中，所有經過認證的端點都標有「需要認證」標記。
            TEXT,
    ],

    "headings" => [
        "introduction" => "簡介",
        "auth" => "認證請求",
    ],

    "endpoint" => [
        "request" => "請求",
        "headers" => "標頭",
        "url_parameters" => "網址參數",
        "body_parameters" => "主體參數",
        "query_parameters" => "查詢參數",
        "response" => "回應",
        "response_fields" => "回應欄位",
        "example_request" => "範例請求",
        "example_response" => "範例回應",
        "responses" => [
            "binary" => "二進位資料",
            "empty" => "空回應",
        ],
    ],

    "try_it_out" => [
        "open" => "試試看 ⚡",
        "cancel" => "取消 🛑",
        "send" => "發送請求 💥",
        "loading" => "⏱ 發送中...",
        "received_response" => "收到回應",
        "request_failed" => "請求失敗並出現錯誤",
        "error_help" => <<<TEXT
            提示：檢查您是否正確連接到網路。
            如果您是 API 的維護者，請驗證您的 API 正在運作並且已啟用跨源資源共享。
            您可以檢查開發人員工具控制台以取得偵錯資訊。
            TEXT,
    ],

    "links" => [
        "postman" => "檢視 Postman 集合",
        "openapi" => "檢視 OpenAPI 規格",
    ],
];
