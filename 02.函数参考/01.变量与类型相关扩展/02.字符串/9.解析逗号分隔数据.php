<?php
$fp = fopen("sales.csv", 'r') or die("can't open file");
print "<table border='1'>";
while ($csv_line = fgetcsv($fp)) {
    print "<tr>";
    for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
        print "<td>" . htmlentities($csv_line[$i]) . "</td>";
    }
    print "</tr>";
}
print "</table>";
fclose($fp) or die("can't close file");