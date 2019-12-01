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
                height: 100vh;
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
                position:;
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

            .links > a {
                color: cyan;
                padding: 0 25px;
                font-size: 33px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .footer
                    {
                        width:800px;
                        height:79px;
                        background-color:#dedede;
                    }

                    p{
                font-size: 30px;
                color:;
            }
                    img{
                border:1px solid #add;
                padding: 5px;
                width:50%;
            }
            .image1{
                border:1px solid #add;
                padding: 5px;
                width:100%;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Mamma Kitchen Restaurant
                </div>

                <div class="links">
                <ul class="nav navbar-nav navbar-right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span><p> Return Home</p></a></li>
	    </ul>
	
                </div>
            </div>
        </div>
        <img src ="{{ URL:: to('/image/Screenshot_2.png') }}"  class="image1">
        
<br>

<h3 style="text-align:center;,font-size:24px;" >We are open on Monday to Saturday from 10:00 to 22:30</h3>
<address style="text-align:center;,font-size:24px;">
<p>Nyeri, Kenya <br>
Tel:+254714706415<br>
Email:<a href="management@mamakitchencaffe.com">mammakitchen@gmail.com</a></p></address>


<p style="text-align:center;,font-size:24px;">We are recruiting every year. 
        Send your cv by email to:<br>
        <a href="management@mamakitchencaffe.com">management@mamakitchencaffe.com</a></p>
                
      
            
        <footer style="text-align:center">
            
            <p class="footer-links">Terms of Use and Privacy Policy</p>
                  
                  
            <div class="col-md-4">&copy; 2019, Created by <a href="">Kikirui Denis</a>
            </div>
             <ul class="social">       
            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a>Twitter</li>         
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>Facebook</li>        
            <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a>Youtube</li>
                    
            </ul>   
            </div>
                
            </div>
              
            
            </footer>
    </body>
</html>
