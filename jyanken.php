<?php

/*
 * じゃんけんをしてその結果を出力する関数を作成
 */

$saito = null;
$kobayashi = null;

echo "斎藤は{$saito}を出しました";
echo "小林は{$kobayashi}を出しました";

/**
 * @abstract ふたりの手を判断しどちらが勝ったか返す
 * @param string $hand1
 * @param string $hand2
 * @return int 1:１が勝ち、2:２が勝ち、0:引き分け
 */
function judge($hand1,$hand2){
    $judge = null;
    return $judge;
}

?>
