<style>
.dropbtn {
  background-color:#070719;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  padding-left:100px;
    padding-right: 100px;
    overflow: hidden;

}

.dropbtn:hover, .dropbtn:focus {
  background-color: #81F7F3;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FF0000;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style> 
<div class="menu">
    <div class="navbar">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="fw-icon-th-list"></i>
        </a>
        <div class="nav-collapse collapse">
            <ul class="nav">
          <?php
           $path = $_SERVER['SCRIPT_NAME'];
           $currenttitle = basename($path,'.php');
          ?>
              <li class="<?php if($currenttitle=='index') echo 'active';?> border-left"><a href="index.php">Home</a></li>
                <?php
          if(Session::get('admin') == true){ ?>
             <li class="<?php if($currenttitle=='admindashboard') echo 'active';?>"><a href="admindashboard.php">Dashboard</a></li>
        <?php   }  
          else if(Session::get('user') == true){  ?>
             <li class="<?php if($currenttitle=='userdashboard') echo 'active';?>"><a href="userdashboard.php">Dashboard</a></li>
         <?php }
        ?>      
                <li class="<?php if($currenttitle=='howitworks') echo 'active';?>"><a href="howitworks.php">How It Works</a></li>
                <li class="<?php if($currenttitle=='about') echo 'active';?>"><a href="about.php">About Us</a></li>
                <li class="<?php if($currenttitle=='contact') echo 'active';?>"><a href="contact.php">Contact Us</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
            <div class="mini-menu">
<!--
        <label>
      <select class="selectnav">
        <option value="#" selected="">Home</option>
        <option value="#">About Us</option>
        <option value="#">→ Another action</option>
        <option value="#">→ Something else here</option>
        <option value="#">→ Another action</option>
        <option value="#">→ Something else here</option>
        <option value="#">Work</option>
        <option value="#">Contact Us</option>
      </select>
      </label>
-->
                
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Home</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="userdashboard.php">user Dashboard</a>
    <a href="admindashboard.php">Admin Dashboard</a>
    <a href="about.php">About us</a>
    <a href="howitwork.php">How Platform Work</a>
    <a href="contact.php">Contact us</a>
      
  </div>
</div>
      </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
