<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Form-Validation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- JQuery -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="js/jquery-3.2.1.min.js" rel="stylesheet">
    
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Form-Validation</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    
    <section class="form-section">
    <div class="container">
    <p id="demo4" style="color:red"></p>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <form name="myForm" action="/action_page_post.php"
            onsubmit="return validateForm()" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input name="name" type="name" placeholder="Enter Name" class="form-control" id="name">
            </div>
            <p id="demo" style="color:red"></p>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input name="email" type="email" placeholder="Enter Email" class="form-control" id="email">
            </div>
            <p id="demo1" style="color:red"></p>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input name="pwd" type="password" class="form-control" id="pwd">
            </div>
            <p id="demo2" style="color:red"></p>
            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input name="Cpwd" type="password" class="form-control" id="Cpwd">
            </div>
            <p id="demo3" style="color:red"></p>
            <div class="checkbox">
              <label><input name="checkbox" type="checkbox" id="checkbox"> Remember me</label>
            </div>
            <button type="submit" value="submit" class="btn btn-default">Submit</button>
            <p id="demo5" style="color:#32CD32"></p>
          </form>
          
        </div>
      </div>
    
    </div><!-- /.container -->
  </section>

  <script>
    function validateForm() {
      var x = ["name", "email", "pwd", "Cpwd"];
      name = document.getElementById('name').value;
      email = document.getElementById('email').value;
      pwd = document.getElementById('pwd').value;
      Cpwd = document.getElementById('Cpwd').value;
      
    if (name, email, pwd, Cpwd == "") {
      document.getElementById('demo4').innerHTML = "Form must be filled out";
    }
    else if (pwd == "") {
      document.getElementById('demo1').innerHTML = "Input Password";
    }
     else if (name == "") {
      document.getElementById('demo').innerHTML = "Input Name";
    }
    else if (email =="") {
      document.getElementById('demo2').innerHTML = "Input Email";
    }
    else if (Cpwd != pwd) {
      document.getElementById('demo3').innerHTML = "Password do not match";
    }

    else {
      document.getElementById('demo5').innerHTML = "Form submitted";
    }
}
</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
