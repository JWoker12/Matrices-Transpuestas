<?php
    if (!empty($_POST['row']) && !empty($_POST['column']) && empty($_POST['matrix'])) {
        $row = $_POST['row'];
        $column = $_POST['column'];
        generate($row, $column);
    }
    if (!empty($_REQUEST['matrix'])) {
        $column = $_POST['column'];
        $row = $_POST['row'];
        $matrix = $_REQUEST['matrix'];
        result($matrix, $row, $column);
    }

    function generate($row, $column){
        $count = 0;
        $html = "<form class='form-dimensions' id='formMatrix'><table>";
            for ($i = 0; $i < $row; $i++) { 
                $html .= "<tr>";
                for ($j = 0; $j < $column; $j++) {
                    $count ++;
                    $html .= "<td><input type='number' name='input-$count' class='matrix' value='0'></td>";
                }
                $html .= "</tr>";
            }
        $html .= "</table><div class='form-dimensions'><button class='load' id='result' type='button'>Load</button></div></form>";
        echo $html;
    }

    function result($matrix, $row, $column){
        $count = 0;
        $html = "<form class='form-dimensions' id='Matrix'><table class='result'>";
            for ($i = 0; $i < $row; $i++) { 
                $html .= "<tr class='tr'>";
                for ($j = 0; $j < $column; $j++) {
                    $digitValue = $matrix[$count][1];
                    $html .= "<td class='td'>$digitValue</td>";
                    $count ++;
                }
                $html .= "</tr>";
            }
        $html .= "</table>";
        $html .= "<table class='result'>";
        $count = 0;
            for ($i = 0; $i < $column; $i++) {
                $html .= "<tr class='tr'>";
                $count = $i;
                for ($j = 0; $j < $row; $j++) {
                    $digitValue = $matrix[$count][1];
                    $html .= "<td class='td'>$digitValue</td>";
                    $count = $count + $column;
                }
                $html .= "</tr>";
            }
        $html .= "</table></form>";
        echo $html;
    }
    
?>