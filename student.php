<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.buttons li {
    display: inline-block;
    font-size: 20px;
    padding: 20px;
}
</style>
</head>
<body>

<h2>Student Login</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="projectstu.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="imglogin.png" alt="login"  class="avatar">
    </div>

    <div class="container">
       <label for="Fd_id"><b>Department ID</b></label>
      <input type="text" placeholder="Enter your Department ID" name="Fd_id" required><br>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter your name" name="Sname" required><br><br>

      <label for="DOB"><b>Date Of Birth</b></label>
      <input type="date" placeholder="DD/MM/YY" name="DOB" required><br><br>
      <label for="gender"><b>Gender</b></label>
      <input type="text" placeholder="M-Male,F-Female,O-Others" name="gender" required><br>
       <label for="Room_no"><b>Room No</b></label>
      <input type="text" placeholder="Enter your Room No." name="Room_no"required><br>

      <label for="Building"><b>Building</b></label>
      <input type="text" placeholder="Enter the name of your building" name="Building"required><br>

<label for="Street_no"><b>Street No.</label>
      <input type="text" placeholder="Enter the name of your building" name="Street_no"required"><br>


      <label for="town"><b>Town</b></label>
      <input type="text" placeholder="Enter the town name" name="town" required><br>

     
        
      <ul class="buttons">
      <li><input type="submit" name="" value="Submit"></li>
        </ul>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      
      
      
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
