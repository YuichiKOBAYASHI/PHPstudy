<!DOCTYPE html>
<html>
    <head>
        <title>02jyanken</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
</html>
<?php

/*
 * じゃんけんをしてその結果を出力する関数を作成
 */

//変数初期化
$saito      = null;
$kobayashi  = null;

//変数セット
$saito       = "goo";
$kobayashi   = "choki";


echo "斎藤は{$saito}を出しました<br>";
echo "小林は{$kobayashi}を出しました<br>";

//関数を呼び出し
$res =judge($saito,$kobayashi);

echo "勝者は、{$res}です<br>";




/**
 * @abstract ふたりの手を判断しどちらが勝ったか返す
 * @param string $hand1
 * @param string $hand2
 * @return string 勝った人の名前
 */
function judge($hand1,$hand2){
    
    $winname = null;
    
    //条件分岐で勝ち負けを判断
    
    
    
    
    return $winname;
}

?>
