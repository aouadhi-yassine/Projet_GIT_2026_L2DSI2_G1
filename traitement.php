<link href="bootstrap.css" rel="stylesheet">


<TABLE>
    <TR>
        <TH>Nom</TH>
        <TH>Age</TH>
    </TR>
<?php
foreach ($_POST as $key => $value) {
    echo "<TD>$value</TD>";
}

?>
</TABLE>