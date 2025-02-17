<?php
echo "<link rel=stylesheet href=../css/bootstrap.min.css>";

include "../connect.php";

$bno = $_GET['bno'];
$rs = mysqli_query($con, "UPDATE bill SET ostatus='In Transit' WHERE bill_no=$bno");

if ($rs) {
    $res = mysqli_query($con, "SELECT pid FROM short_bill WHERE billno=$bno");

    if (!$res) {
        die('Error in SQL query: ' . mysqli_error($con));
    }

    while ($row = mysqli_fetch_array($res)) {
        mysqli_query($con, "UPDATE product SET pqty=pqty-1 WHERE pid=$row[0]");
    }

    ?>
    <script>
        alert("Order Packed");
        location="admindashboard.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Packing Error");
        location="admindashboard.php";
    </script>
    <?php
}
?>
