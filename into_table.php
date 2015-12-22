<?php
/*
A simple function to output 2-dimensional array into table.

Simply put the desired array into the first argument and set
whether or not you want the table to have headers in the
second argument.
*/

function print_table(array $array_input, $use_headers = true){
    try{
        echo "<table>";
        if ($use_headers) {
            echo "<tr>";
            foreach(array_keys($array_input[0]) as $column_header){
                echo "<th>$column_header</th>";
            }
            echo "</tr>";
        }
        
        foreach ($array_input as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
        
    } catch (Exception $e) {
        echo "Data tabel kosong atau rusak.";
    }
}
?>
