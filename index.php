<?php
namespace htmlTable;
function htmlTable ($aTableData, $aHeaderInfo){
    $sTableBody = '';
    $sTableHeader = '';

    foreach ($aHeaderInfo as $sColumn){
        $sTableHeader .= "<th style='border: 1px solid black;'>$sColumn</th>";
    }

    $iCount = 2;
    foreach ($aTableData as $key => $aValue){

        $key % $iCount ? $sRowStyle = "background-color: #f2f2f2;": $sRowStyle = "";

        $sTableBody .= "<tr style='$sRowStyle'>";
        foreach ($aValue as $sTableInfo) {
            $sTableBody .= "<td style='border: 1px solid black;'>". ($sTableInfo == NULL ? '' : $sTableInfo) ."</td>";
        }
        $sTableBody .= '</tr>';
    }

    echo "<table style='border-collapse: collapse;'>";
    echo "<thead><tr>$sTableHeader</tr></thead>";
    echo "<tbody>$sTableBody</tbody>";
    echo "</table><br><br>";
}