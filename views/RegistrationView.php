<?php include 'header.php';

?>
    <header class="registration">
       <div class="bg-overlay"></div>
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="#">MVC <span>for BWT</span></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="/MVC">Home</a>
                        </li>
                        <li><a href="/MVC/registration">Registration</a>
                        </li>
                        <li><a href="/MVC/weather">Weather</a>
                        </li>
                        <li><a href="/MVC/callback">Callback</a>
                        </li>
                        <li><a href="/MVC/feedback">Feedback</a>
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
                               <button type="submit" name="button" style="color:#000;border:1px solid #000; margin:0 auto; padding: 7px 20px; font-size:16px;">Submit</button>
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
            <h1>Registration</h1>
        </div>
    </header>

    <section class="login-form">
        <form class="form-horizontal" role="form" action="/MVC/registration/signup" method="post">

                  <div class="form-group">
                    <label for="inputName" class="col-sm-4 control-label">Name (Username / Login)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" required id="inputName" placeholder="Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Last name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="lastName" required id="inputLastName" placeholder="Last name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="password" required id="inputPassword3" placeholder="Password">
                    </div>
                  </div>

                  <div class="form-group">
                       <label for="" class="col-sm-4 control-label">Sex</label>
                        <div class="col-sm-8">
                           <div class="checkbox">
                                <label class="col-sm-5">
                                  <input type="radio" name="state" value="male"> Male
                                </label>
                                <label class="col-sm-5">
                                  <input type="radio" name="state" value="female"> female
                                </label>
                            </div>
                        </div>
                    </div>

                  <div class="form-group">
                    <label for="birthDate" class="col-sm-4 control-label">Birth date</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="Birth date">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                      <button type="submit" class="btn btn-default">Войти</button>
                    </div>
                  </div>

        </form>
    </section>
   <footer>
       <p>&copy; Copyright by Redhead</p>
   </footer>



  ?>

<?php include 'footer.php'?>
