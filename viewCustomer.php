<!DOCTYPE html>
<html lang="en">
<head>
<title>USER DETAILS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/viewcustomer.css">
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

</head>

<body style="background-image: url(background.png); background-repeat: repeat-y;">

<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<div class="main_div">
 
    <div class="navbar navbar-expand-md">
    
        <a href="index.php" class="navbar-brand font-weight-bold text-white text-center"><img src="Images/img/logo.png" alt="logo" height ="60px" width="200px"></a>
        <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
          
          <span class="navbar-toggler-icon" style="background:black; border-radius: 50%; border:10px; border-color: white;"></span>
        </button>
  
        <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link text-white">HOME</a>
            </li>
            <li class="nav-item">
              <a href="transectionHistory.php" class="nav-link text-white">TRANSFER HISTORY</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link text-white">ABOUT</a>
            </li>
          </ul>
        </div>
      </div>

      
           
          <div class="display_table">
                 <h1>User's Details</h1>
            <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <thead>
                     <tr>
                     <th>Account no.</th>
                      <th>Account holder name</th>
                      <th>E-Mail</th>
                       <th>Account Balance(in Rs.)</th>
                    
                     <th colspan="2">operation</th>
                     </tr>
                    </thead>
                   <tbody>
                  </div>
          

           <?php 
           while($rows=mysqli_fetch_assoc($result)){
       ?>
           <tr style="color : white;">
               <td class="py-2"><?php echo $rows['id'] ?></td>
               <td class="py-2"><?php echo $rows['name']?></td>
               <td class="py-2"><?php echo $rows['email']?></td>
               <td class="py-2"><?php echo $rows['balance']?></td>
               <td><a href="transection.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #00a0fd; color:#000000">Transfer money</button></a></td> 
           </tr>
       <?php
           }
       ?>
</tbody>
</table>
</div>

</div>

</div>
</div>

</body>
</html>
