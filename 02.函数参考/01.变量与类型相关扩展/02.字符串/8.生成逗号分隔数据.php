<?php
// 生成 csv 文件
$sales = array( array('Northeast', '2015-01-01', '2015-01-01', 12.54),
                array('Northwest', '2015-01-01', '2015-01-01', 546.33),
                array('Southeast', '2015-01-01', '2015-01-01', 93.26),
                array('Southwest', '2015-01-01', '2015-01-01', 945.21),
                array('All', '--', '--', 1597.34));

$filename = './sales.csv';
$fh = fopen($filename,'w') or die("Can't open $filename");
foreach ($sales as $sale_line) {
    if (fputcsv($fh, $sale_line) === false){
        die("Can't write CSV line");
    }
}
fclose($fh) or die("Can't close e$filename");

// 输出 csv
echo '<pre>';
$fh = fopen('php://output','w');
foreach ($sales as $sale_line) {
    if (fputcsv($fh, $sale_line) === false){
        die("Can't write CSV line");
    }
}
fclose($fh);

// 将 csv 数据放入字符串
ob_start();
$fh = fopen('php://output','w');
foreach ($sales as $sale_line) {
    if (fputcsv($fh, $sale_line) === false){
        die("Can't write CSV line");
    }
}
fclose($fh);
$output = ob_get_contents();
ob_end_clean();
print_r($output);