<?php
    $input_line = trim(fgets(STDIN));
    $explode_input_line = preg_split("/\s/", $input_line);
    $count = $explode_input_line[0];
    $present_a = $explode_input_line[1];
    $present_b = $explode_input_line[2];
    for ($i=1; $i<=$count; $i++) {
        if ($i % $present_a == 0 && $i % $present_b == 0) {
            echo "AB"."\n";
        } elseif ($i % $present_a == 0) {
            echo "A"."\n";
        } elseif ($i % $present_b == 0) {
            echo "B"."\n";
        } else {
            echo "N"."\n";
        }
    }
?>