<?php
session_start();

$users=0;
$orders = 0;
$dishes = array();
$orderCount = array();


include '../process/connect.php';

$sql = "SELECT ID, NAME, EMAIL, TELEPHONE, ADDRESS FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $users=$users+1;
  }

}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $orders=$orders+1;
  }

}


$sql = "SELECT * FROM dishes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $dishName = $row['NAME'];
    array_push($dishes,$dishName);
  }
}

foreach($dishes as $dish) {
  $dishOrderCount = 0;
  $sql = "SELECT * FROM orderItems WHERE DISH='$dish'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $dishOrderCount = $dishOrderCount+1;
    }
  }
  array_push($orderCount,$dishOrderCount);
}



?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <div class="sticky-nav">
      <ul>
        <li><a class="active" href=""><img src="../../images/logo.png" style="width:15px"></a></li>
        <li><a class="active" href="">Admin Dashboard</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="dishes.php">Dishes</a></li>
        <li><a href="additem.php">Add new Item</a></li>
        <li><a href="analytics.php">Analytics</a></li>
        <li><a href="registerAdmin.php">Register Admin</a></li>
      </ul>
    </div>
    <br/><br/><br/>
  </div>

  <div align='center'>
    <h2>Analytics</h2>
  </div>
  <br/>
  <div id="overview"></div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);


  function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Stats', 'Unit'],
    ['Customers', <?php echo $users;?>],
    ['Orders', <?php echo $orders;?>]
  ]);

    var options = {'title':'Overview','height':120};

    var chart = new google.visualization.BarChart(document.getElementById('overview'));
    chart.draw(data, options);
  }
  </script>

  <br/>
  <div id="dishes"></div>

  <script type="text/javascript">
  // Load google charts
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Dishes', 'Units'],
    <?php
    $size = count($dishes);
    $i = 0;
    while ($i < $size){
    ?>
      ['<?php echo $dishes[$i];?>', <?php echo $orderCount[$i];?>],
    <?php
      $i++;
    }
    ?>

  ]);

    var options = {'title':'Ordered Dishes', 'width':700, 'height':500};

    var chart = new google.visualization.PieChart(document.getElementById('dishes'));
    chart.draw(data, options);
  }
  </script>


</body>
</html>
