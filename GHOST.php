<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg text-light bg-dark m-0">
    <div class="  ms-1">
      <a class="navbar-brand m-0" href="#">
        <img src="EmblemN.png" alt="Bootstrap" width="60" height="50">
      </a>
    </div>
    
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Bootstrap" width="150" height="40">
      </a></div>
     
        <div class="  ms-1">
            <a class="navbar-brand m-0" href="#">
            <img src="flag.png" alt="Bootstrap" width="80" height="50">
          </a>
        </div>
      </a>
  </nav>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="result";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<?php 



$enrollmemnt_no=$_POST['enrollmemnt_no'];
$result = mysqli_query($conn,"SELECT * FROM re where enrollmemnt_no='$enrollmemnt_no' ");

?>
<?php
if(mysqli_num_rows($result)>0){
$i=1;
while($row = mysqli_fetch_array($result)) {
?>




<table class="table table-striped">
<tr>
<th scope="col">Index</th>
<th scope="col">Enrollment no.</th>
<th scope="col">Name</th>
<th scope="col">Department</th>
<th scope="col">Total marks</th>
<th scope="col">Address</th>
<th scope="col">Mobile no.</th>
<th scope="col">center</th>
<th scope="col">Addimissin date</th>

</tr>
<tr>
<td><?php echo "$i"; ?></td>
<td><?php echo $row["enrollmemnt_no"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["depatment"]; ?></td>
<td><?php echo $row["total_marks"]; ?></td>

<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["mobile_no"]; ?></td>
<td><?php echo $row["centre"]; ?></td>
<td><?php echo $row["addmissiondate"]; ?></td>


</tr>
<?php
$i++;
}
}
else{
?>
<table class="table table-striped">
<tr>
<th scope="col" style="text-align:center">Record not found</th>";
<?php
}

?>



</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>