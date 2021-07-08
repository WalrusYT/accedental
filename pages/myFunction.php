<?php
function combo($combo, $con, $tab, $field)
{
    $sql = "select * from $tab";
    $query = mysqli_query($con, $sql);
    if(isset($_REQUEST["$combo"])) {
        $g_name = $_REQUEST["$combo"];
    }else
        $g_name = '1';
    echo "<select name='$combo'>";
    while ($r = mysqli_fetch_assoc($query)) {
        $a=$r["$field"];
        $id =$r['id'];
        if ($g_name == $id)
            $select = 'selected';
        else
            $select = '';
        echo "<option value='".$id."' $select>$a</option>";
    }
    echo "</select>";
}

