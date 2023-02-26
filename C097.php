<?php
    // Your code here!
    $input_line = trim(fgets(STDIN));
    $explode_input_line = preg_split("/\s/", $input_line);
    $count = $explode_input_line[0];
    $present_a = $explode_input_line[1];
    $present_b = $explode_input_line[2];
    $result = 0;
    for ($i=1; $i<=$count; $i++) {
        if ($i % $explode_input_line[1] == 0 && $i % $explode_input_line[2] == 0) {
            echo "AB"."\n";
        } elseif ($i % $explode_input_line[1] == 0) {
            echo "A"."\n";
        } elseif ($i % $explode_input_line[2] == 0) {
            echo "B"."\n";
        } else {
             echo "N"."\n";
        }
        $result++;
    }
?>