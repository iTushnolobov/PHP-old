<?php

/**
 * File push
 *
 * @package \\${Lab 1}
 */
$rows = $_POST["row-value"];
$cols = $_POST["column-value"];
echo "<tr>";
echo "<td class='table-head'></td>";
for ($k = 1; $k <= $cols; $k++) {
    echo("<td class='table-head'>" . $k . "</td>");
}
echo "</tr>";
for ($tr = 1; $tr <= $rows; $tr++) {
    echo("<tr>");
    echo("<td class='table-head'>" . $tr . "</td>");
    for ($td = 1; $td <= $cols; $td++) {
        if ($tr == $td) {
            echo "<td class='table-middle'>" . $tr * $td . "</td>";
        } elseif (($tr * $td) % 2 == 0) {
            echo "<td class='table-even'>" . $tr * $td . "</td>";
        } elseif (($tr * $td) % 2 == 1) {
            echo "<td class='table-odd'>" . $tr * $td . "</td>";
        }
    }
    echo "</tr>";
}