<?php include 'header.php';


?>
<div class="modal-window">
  <?php
    if(isset($_SESSION['user'])){
      echo  '
      <form class="login" action="/MVC/Main/login" method="post">
        <h1>Already Registred </h1>
      </form>';
    }
    else{
      echo '
      <form class="login" action="/MVC/Main/login" method="post">
            <input type="name" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>';
    }

   ?>

</div>
<header>

   <div class="bg-overlay"></div>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="#">MVC <span>for BWT</span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
              <ul class="nav navbar-nav navbar-left">
                  <li><a href=" ">Home</a>
                  </li>
                  <li><a href="registration">Registration</a>
                  </li>
                  <li><a href="weather">Weather</a>
                  </li>
                  <li><a href="callback">Callback</a>
                  </li>
                  <li><a href="feedback">Feedback</a>
                  </li>
          
  </ul>
<div class="navbar-right">
  <?php
        if(isset($_SESSION['user']))
        {
           echo $_SESSION['user'] . '
           <button type="button" class="dropdown-toggle" data-toggle="dropdown" name="user-btn"><i class="fa fa-user"></i></button>

          <div class="dropdown-menu" style="width:420px; padding:20px;">
            <a href="/MVC/Main/logout" class="btn btn-default">Log out</a>
          </div>
           ';
         }
        else{
          echo 'not register' . '
          <button type="button" class="dropdown-toggle" data-toggle="dropdown" name="user-btn"><i class="fa fa-user"></i></button>

         <div class="dropdown-menu" style="width:420px; padding:20px;">
         <form class="form-horizontal" role="form" action="/MVC/Main/login" method="post">

                   <div class="form-group">
                     <label for="inputName" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-10">
                       <input type="text" class="form-control" name="login" id="inputName" placeholder="Name">
                     </div>
                   </div>

                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                     <div class="col-sm-10">
                       <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                     </div>
                   </div>
           <button type="submit" class="btn btn-default" name="button" style="color:#000;border:1px solid #000; margin:0 auto; padding: 7px 20px; font-size:16px;">Submit</button>
     </form>
         </div>

          ';
        };
  ?>

</div>
        </div>
    </div>
  </div>
        <div class="site-title">
            <h1>MVC project for BWT</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ea numquam nihil, doloribus rerum. Maxime delectus et, aspernatur quas ex!</p>
            <button id="show-login-form">Login</button>
        </div>
<!--
        <div class="pages-list">
            <ul class="row">
                <li class="col-md-3"><a href="/register"><span>Regisration</span></a></li>
                <li class="col-md-3"><a href="/weather"><span>Weather</span></a></li>
                <li class="col-md-3"><a href="/callbackform"><span>CallBackForm</span></a></li>
                <li class="col-md-3"><a href="/feedback"><span>Feedback list</span></a></li>
            </ul>
        </div>
-->
    </header>
<?php include 'footer.php'; ?>
