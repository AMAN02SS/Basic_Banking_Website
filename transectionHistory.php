<html>
<head>
<title>MONEY TRANSFER HISTORY</title>
<link rel="stylesheet" type="text/css" href="css/userstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/transectionMoney.css">
<link rel="stylesheet" href="CSS/nav.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>


 </style>
</head>
<body style="background-image: url(background.png); background-repeat: repeat-y;">
    <div class="main_div">

        <div class="navbar navbar-expand-md">
    
          <a href="index.html" class="navbar-brand font-weight-bold text-white text-center"><img src="Images/img/logo.png" alt="logo" height ="60px" width="200px"></a>
          <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
            
            <span class="navbar-toggler-icon" style="background:black; border-radius: 50%; border:10px; border-color: white;"></span>
          </button>
    
          <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link text-white">HOME</a>
              </li>
              <li class="nav-item">
                <a href="viewCustomer.php" class="nav-link text-white">USERS DETAILS</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link text-white">ABOUT</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="container">
          <h1 class="text-center pt-4" style="color : black; ">Transfer History</h1>
          
         <br>
         <div class="table-responsive-sm">
      <table class="table table-hover table-striped table-condensed table-bordered">
          <thead style="color : white;">
              <tr>
                  <th class="text-center">S.No.</th>
                  <th class="text-center">Sender</th>
                  <th class="text-center">Receiver</th>
                  <th class="text-center">Amount</th>
                  <th class="text-center">Date & Time</th>
              </tr>
          </thead>
          <tbody>
          <?php
  
              include 'connection.php';
  
              $sql ="select * from transaction";
  
              $query =mysqli_query($conn, $sql);
  
              while($rows = mysqli_fetch_assoc($query))
              {
          ?>
  
              <tr style="color : white;">
              <td class="py-2"><?php echo $rows['sno']; ?></td>
              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['balance']; ?> </td>
              <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                  
          <?php
              }
  
          ?>
          </tbody>
      </table>
  
      </div>
  </div>
</body>
</html>