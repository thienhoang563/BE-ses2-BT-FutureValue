
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="futurevalue.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $TIEN_BAN_DAU = $_POST["investment"];
    $LAI_SUAT_NAM = $_POST["rate"];
    $SO_NAM_DAU_TU = $_POST["years"];
    $A = $TIEN_BAN_DAU;
    for ($x=1;$x <= $SO_NAM_DAU_TU;$x++){
        $FUTURE_VALUE = ($TIEN_BAN_DAU + ($TIEN_BAN_DAU * $LAI_SUAT_NAM*0.01));
        $TIEN_BAN_DAU = $FUTURE_VALUE;
    }

}

?>


<div id="content">
    <h1>Future Value Calculator</h1>

    <label>Investment Amount: </label>
    <span><?php echo "$" . $A ?></span><br/>

    <label>Yearly Interest Rate: </label>
    <span><?php echo $LAI_SUAT_NAM . "%" ?></span> <br/>

    <label>Number of Years: </label>
    <span><?php echo $SO_NAM_DAU_TU ?></span><br/>


    <label>Future Value: </label>
    <span><?php echo "$" . $TIEN_BAN_DAU ?></span> <br/>
</div>
</body>
</html>