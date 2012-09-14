<?php

/*
 * じゃんけんをしてその結果を出力する関数を作成
 */

$saito = null;
$kobayashi = null;

echo "斎藤は{$saito}を出しました";
echo "小林は{$kobayashi}を出しました";

//関数を呼び出し
$res =judge($saito,$kobayashi);

echo "勝者は、{$res}です";




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
