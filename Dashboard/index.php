<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard  | BitlyHelp</title>
  
    <link href="../css/style.css" rel="stylesheet">
<link href="../output.css" rel="stylesheet">
<script src="https://use.fontawesome.com/f00636cbad.js"></script>


<style>

.box-title{
display: inline-block;
font-size: 25px;
margin: 0;
line-height: 1;

}

.box-header{
    color: #444;
display: block;
padding: 10px;
position: relative;
}
</style>


</head>
<body class="bg-gray-100">



<?php 
include("../connect.php");


include("navbar.php");
$user_id =  $_SESSION['user_id'];
$views_url = "SELECT sum(hits) as views FROM `url_shorten` where user_id = $user_id ";
// $wallet_url = "SELECT wallet FROM `user` where id = $user_id ";

$result = mysqli_query($conn, $views_url);
// $result2 = mysqli_query($conn, $wallet_url);


while($row = mysqli_fetch_assoc($result)) {
$views =  $row['views'];
}
/*
while($row2 = mysqli_fetch_assoc($result2)) {
  $wallet =  $row2['wallet'];

}
*/
// output data of each row
  // while($row = mysqli_fetch_assoc($result)) {
  //    $lkid = $row['id'];
  //   $link = $row["url"];
  //   $parse = parse_url($link);
  //   $host = $parse['host'];
  //   $link = str_ireplace('www.', '', $host);
    
  //   $shorten_url = $base_url.$row['short_code'];

  // }

  
echo "<div class='md:flex flex-row'>";
include("sidebar.php");




?>

<div class="mt-5 container">

<p class="text-xl text-gray-600"><b>Dashboard</b></p>
<br>

<div class="bg-white border-b border-gray-200 rounded">
<ul class="flex p-3 text-gray-500 text-sm lg:text-base">
                    <li class="inline-flex items-center">
                      <a href="/">Home</a>
                      <svg
                        class="h-5 w-auto text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </li>
                    <li class="inline-flex items-center">
                      <a href="/components">Dashboard</a>
                      <svg
                        class="h-5 w-auto text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </li>
                    <li class="inline-flex items-center">
                      <a href="#" class="text-indigo-700">Dashboard</a>
                    </li>
                  </ul>
 </div>               


<br>


<div class="grid md:grid-cols-4 grid-cols-2   gap-4">
  <div class="bg-purple-700 text-white  p-4"><p class="text-4xl"><?php echo $views; ?></p><p>Total views</p></div>
  
  <div class="bg-yellow-400 p-4"><p class="text-4xl">₹<?php echo $wallet;?></p><p>Total Earnings</p></div>
  <div class="bg-red-600 text-white  p-4"><p class="text-4xl">₹0</p><p>Referral Earnings</p></div>
  <div class="bg-gray-900 text-white p-4"><p class="text-4xl">0.245</p><p>Average CMP</p></div>

</div>

<div class="mt-5 annocements bg-white shadow-md">
<div class="box-header">
<div><i class="fa fa-bullhorn" style="font-size: 25px; margin-right:6px;"></i> 
<h3 class="box-title">Announcements</h3>
<br>
<hr>
<br>

<span>
<i class="fa fa-angle-double-right"></i> <b class="text-lg">New Withdrawal Methods:</b>
</span>
<p>1) PhonnePe Has added</p>
<p>2) GooglePay Has added</p>
<p>3) Paytm Has added</p>


<hr/>

</div>

</div>


</div>
</div>
</div>



<div class="bg-white text-center mt-10 p-3 font-bold border-b border-gray-200 rounded">


Copyright © Bitly.help 2021 
</div>
</body>
</html>