<style>
    .searchform{
  position:relative
}
.searchform input[type="text"]{
  background: #EBEBEB;
  height: auto;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  margin-bottom: 0;
  padding: 7px;
  border: none;
  float: left;
  color: #5F5F5F;
  width: 100%;
  height: 50px;
  float: none;
  padding-right: 70px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="submit"]{
  background: #6B6B6B;
  border: none;
  padding: 7px;
  color: #fff;
  height: 50px;
  position: absolute;
  bottom: 0;
  right: 0;
  margin:0
}
     body {
 height: 100%;
 /* The html and body elements cannot have any padding or margin. */
 padding-top: 70px; /* Required padding for .navbar-fixed-top. Change if height of navigation changes. */
}

.navbar-fixed-top .nav {
 padding: 15px 0;
}

.navbar-fixed-top .navbar-brand {
 padding: 0 15px;
}

@media(min-width:768px) {
 body {
 padding-top: 100px; /* Required padding for .navbar-fixed-top. Change if height of navigation changes. */
 }

 .navbar-fixed-top .navbar-brand {
 padding: 15px 0;
 }
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span> 
 </button>
 <a class="navbar-brand" href="home"><img src="<?php echo base_url(); ?>assets/img/Kost6.png"></a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav">
 <li ><a href="home">Home</a></li>
 <li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile<span class="caret"></span></a>
 <ul class="dropdown-menu">
 <li><a href="#" ><span class="glyphicon glyphicon-user"></span> Profil Saya</a></li>
 <li><a href="#" ><span class="glyphicon glyphicon-camera"></span> Pasang Iklan</a></li>
 </ul>
 </li>
 
 <!--
 <li><a href="#">Page 2</a></li>
 <li><a href="#">Page 3</a></li>
 -->
 <li><form class="searchform">
         <input type="text" name="s" placeholder="Cari Kost">
  <input type="submit" value="Search" title="Search Button">
</form></li>
 </ul>
 <ul class="nav navbar-nav navbar-right">
 <li><a href="daftar"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
 <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 </ul>
 </div>
</div>
</nav>