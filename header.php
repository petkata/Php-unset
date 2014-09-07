<?php
if (date("G")>6 && date("G")<12) {
    $daylight="Morning";
}
elseif (date("G")>12 && date("G")<19) {
    $daylight="Afternoon";
}
else {
    $daylight="Evening";
}
?>
<div align="center"><font size="4"> 
    Good <?php echo $daylight ?> and welcome to my movie review site!
    </font> <br>
    <?php
        echo "Today is ".  date("F d, Y");
    ?>
</div>