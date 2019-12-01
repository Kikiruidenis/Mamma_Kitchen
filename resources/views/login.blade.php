<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mamma Kitchen Restaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .full-height {
                height: ;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: ;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background:blue;
                width:100%;
            }

            .title {
                font-size: 84px;
                text-align:top;
            }
            .form{
                width:100%;
                height:206px;
                text-align:center;
                  
            }
            .footer
                    {
                        width:800px;
                        height:79px;
                        background-color:#dedede;
                    }
                    img{
                border:1px solid #add;
                padding: 5px;
                width:80%;
            }
            .image1{
                padding: 5px;
                width:100%;
        
            }
            p{
                font-size: 30px;
                color:;
            }


            .links > a {
                color: cyan;
                padding: 0 25px;
                font-size: 33px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            div{
                border-radius:15px;
                padding:10px;
                text-align:center;
            
            }
            input[type=submit]{
                width:100px;
                background-color:green;
                color:white;
                padding:14px 20px;
                margin:8px 0;
                cursor:pointer;
                border:none;
                border-radius:4px;
            }
            input[type=text]{
                width:500px;
                color:white;
                padding:14px 20px;
                
            
            }
            input[type=password]{
                width:500px;
                color:white;
                padding:14px 20px;
                
            }
            input[type=checkbox]{
                color:white;
                padding:14px 20px;
                
            }
        </style>
    </head>
<body>


<nav class="navbar navbar-inverse">
        <ul style="text-align:left;">
	      <li><a href="/home"><span class="glyphicon glyphicon-backward"></span>Mamma Kitchen Restaurant</a></li>
	    </ul>
	</div>
		
		<ul style="text-align:right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
	    </ul>
	</div>
</nav>


       
<div >
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Please Login Here</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" id="form-login">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="un">Username:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="un" placeholder="Enter Username" autofocus="" required="">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" required="">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <input type="submit" value="Login">
			      <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
			      </button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>




</body>
</html>