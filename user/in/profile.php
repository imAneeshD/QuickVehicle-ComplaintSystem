

<?php 
include '../../config.php';


session_start();


$s_email=$_SESSION['email'];




$sql = "SELECT * from  users where email='$s_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $s_email=$row["email"];
       $username=$row["username"];
       $password=$row["password"];

    }
} else {
    echo "0";
}


if (isset($_POST['update'])) {
	
    $uemail=$_POST['uemail'];
    $uname=$_POST['uusername'];
    $upassword=$_POST['upassword'];

    
        $sql = "UPDATE `users` set username='$uname',password='$upassword' where email='$s_email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert(' Details Uploaded.')</script>";
            header("Location: profile.php");

        } else {
            echo "<script>alert('Woops! Something Went Wrong.')</script>";
        }

    }





?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Profile </title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>

<!--TITLE-->

<!--ICON-->
<link rel="shortcut icon" href="/DevanagariBrahmi/logo.png">

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="Team Bboysdreamsfell">
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:locale" content="en_US" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="Profiler Name || Krishivalahs" />

<!--EXTERNAL CSS-->
<link rel="stylesheet" href="css/style.css">



<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@300;400&family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet"> 
<body>


<div class="container">

<table>
<tr>
<td>
<section>
<label for="fileToUpload">
<i class="fa fa-camera"></i>
<input type="file" id="fileToUpload" style="visibility:hidden;" accept=".png,.jpg,jpeg,.PNG,.JPEG" name="fileToUpload" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
</label>
<img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
</section>
<h1></h1>
<h3></h3>
</td>



<tr>
<td class="section2">
<ul>
<br>
<li>
<h2 style="text-align:left;">Update Profile</h2>


<form action="profile.php" method="post">

<label for="productimage">User Name</label>
<input type="name" name="uusername" id="productimage" value="<?php echo $username ?>" />
</li>
<li>
<label for="title">email</label>
<input type="text" id="title" name="uemail" value="<?php echo $s_email ?>" readonly />
</li>
<li>
<label for="tags">Password</label>
<input type="text" id="tags" name="upassword"  value="<?php echo $password ?>"/>
<br>
<button class="btn" name="update" style="width:100px;">SUBMIT</button>

</li>
</ul>
</td> 




<script src="js/custom.js"></script>
<script>
function editdetails2(){
}

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>
</html>
<!-- partial -->
  
</body>
</html>


<style>
  html {
scroll-behavior: smooth;
}
:root{
scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important;
}
::-webkit-scrollbar {
height: 12px;
width: 8px;
background: #000;
}
::-webkit-scrollbar-thumb {
background: gray;
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
background: #000;
}








body{
margin:0;
overflow-x:hidden;
background:#1e1e1e;
font-family: 'Oswald', sans-serif;
}

a,li,em,button,input,textarea,select{
text-decoration:none;
list-style:none;
font-style:normal;
outline:none !important;
transition:0.5s;
resize:none;
}

ul{
position:relative;
left:-20px;
}

ul li{
padding:20px 0;
color:gray;
border-bottom:1px solid rgba(255,255,255,0.1);
}

b{
color:#fff;
}

.btn{
background:#7ed321;
padding:10px;
border:0;
outline:none;
color:#000;
display:block;
width:60px;
margin:10px 0;
text-align:Center;
border-radius:5px;
cursor:pointer;
}


.fa{
color:#7ed321;
cursor:pointer;
}






.container{
width:90%;
margin:10vh auto;
}

.container table{
width:100%;
}

.container table td{
margin:30px;
border-radius:5px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
padding:30px;
background-color:#000;
color:#fff;
vertical-align:top;
}

.container table td:nth-child(1){
text-align:Center;
}

.container table td:nth-child(2) .fa{
float:right;
}

.container table td:nth-child(2) input{
background:none;
outline:none;
border:0;
color:gray;
width:60%;
pointer-events:none;
}

.container table td:nth-child(1) section{
position:relative;
width:200px;
height:200px;
margin:5vh auto;
}


.container table td:nth-child(1) .fa{
position:absolute;
right:25px;
top:25px;
font-size:2em;
}

.container table td img{
width:200px;
height:200px;
border-radius:50%;
}

.container table td h3{
color:gray;
font-weight:normal;
}

.container table .section2{
text-align:left;
}

.container table .section2 label{
display:block;
margin:10px 0;
text-align:left;
} 

.container table .section2 select{
background:#1e1e1e;
width:100%;
padding:19px;
border:0;
outline:none;
color:gray;
}

.container table .section2 input{
background:#1e1e1e;
width:90%;
padding:20px;
color:gray;
border:0;
outline:none;
}

.container table .section2 .quantityselector{
height:80px;
border-bottom:0px;
}

.container table .section2 .quantityselector section{
display:inline-block !important;
width:45%;
margin:0 10px;
}

.container table textarea{
width:90%;
resize:none;
outline:none;
border:0;
background:#1e1e1e;
color:gray;
padding:20px;
}



.container .inframe .card{
width:100%;
height:40vh;
position:relative;
overflow:hidden;
display:block;
margin:10px 0;
}

.container .inframe .card img{
width:100%;
height:40vh;
border-radius:0;
}

.card_content{
height:0;
position:absolute;bottom:0;
width:100%;background-color:rgba(1,1,1,0.8);
transition:0.5s;
}

.card_content ul li{
padding:5px;
font-size:13px;
}

.card_content h3{
text-align:Center;
color:#fff;
}

.inframe .card:hover > .card_content{
height:40vh;
}

.card_content .btn{
font-size:12px;
width:100px;
display:inline-block;
margin:0 10px;
}




@media (max-width:820px){
.container{
width:100%;
}
.container table td{
display:block;
width:90%;
margin:0px;
}
.container table .section2 .quantityselector section{
width:41%;
margin:0px 10px;
}
.container table .section2 ul{
position:relative;
left:-40px;
}

.container table .section2 .quantityselector{

}
}








.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>