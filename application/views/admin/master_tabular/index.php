<?php

echo bootstrap_table_nav($title, array('name' => 'Tambah Tabular', 'destination' => $controller . '/add'), $controller, $action, FALSE, TRUE);

echo bootstrap_tag_open('table', array('class' => 'table table-striped table-hover bg-white'));
echo bootstrap_table_head(array('Tabular', 'Aksi'));
echo bootstrap_tag_open('tbody');
foreach ($master_tabulars as $key => $master_tabular) {
  echo bootstrap_tag_open('tr');
  echo bootstrap_tag('td', bootstrap_tag('span', $master_tabular->ref_code, array('class' => 'tree-span', 'style' => 'padding-left:' . ($master_tabular->ancestry_depth * 30) . 'px;')) . bootstrap_tag('span', $master_tabular->name, array('class' => 'text-overflow')));
  echo bootstrap_tag('td', bootstrap_table_action($controller, $master_tabular->id, TRUE), array('width' => '110px'));
  echo bootstrap_tag_close('tr');
}
if (count($master_tabulars) == 0) {
  echo bootstrap_tag('tr', bootstrap_tag('td', '<b>Tidak terdapat data.</b>', array('class' => 'text-center', 'colspan' => 6)));
}
echo bootstrap_tag_close('tbody');
echo bootstrap_tag_close('table');
?>