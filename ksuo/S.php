<?php
    session_start();

    $date1 = htmlspecialchars($_POST['name']);
    
// 平文化

    // 変数初期化
    $post_date = null;  // 受信データ変数
    $array2 = [];       // 処理中変数
    $decode_code = null;  // デコードデータ変数
    $_SESSION['name'] = null;   // 送信変数

    // データ受信
    $post_date = ($_POST['name']);

    // 公開鍵
    $key = 30;

    // 受信データを配列に分割
    $array2 = explode(" ",$post_date);

    // 型をintに変換
    for($i=0; $i<count($array2); $i++){
        $array2[$i] = intval($array2[$i]);
        $array2[$i] = $array2[$i] + $key;
    }

    // int
    for($i=0; $i<count($array2) -1; $i++){
        $decode_code .= chr($array2[$i]);
    }

// 送信
    $_SESSION['name'] = $decode_code;
    print $decode_code;
    header("Location: http://localhost:8080/var.php");
    exit();
?>