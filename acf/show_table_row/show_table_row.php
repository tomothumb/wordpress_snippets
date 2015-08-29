<?php

/**
 * Show table row with record of advanced custom field if it exsists.
 * 指定のカスタムフィールドがある場合、テーブルの行を表示する
 * @param  string $acf   Field ID （Advanced custom field）
 * @param  string $label Label of output data
 */
function show_table_row($acf,$label){
  $data = get_field($acf);
  if($data != ""){
    $output = array();
    $output[] = "<tr>";
    $output[] = "<th>{$label}：</th>";
    $output[] = "<td>{$data}</td>";
    $output[] = "</tr>";
    echo implode("\n", $output);
  }
  return;
}
