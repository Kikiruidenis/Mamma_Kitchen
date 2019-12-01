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
                color:white;
            }
            .form{
                width:100%;
                 height:206px
                  border:0; 
                  cellpadding:0; 
                  cellspacing:0;
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
                @section('content')
                <ul class="nav navbar-nav navbar-right">
	      <li><a href="../"><span class="glyphicon glyphicon-backward"></span><p> Return Home</p></a></li>
	    </ul>
	
                </div>
            </div>
        </div>
        <img src ="{{ URL:: to('/image/Screenshot_2.png') }}"  class="image1">


        <p>
            Stop by and discover all the Kenya flavors through our dishes, our planks to share and our home made desserts.
            Our menu offers a varied choice of pasta, pizzas and salads without forgeting the famous mialanes schnitzel.
            Our gtenerous dishes will awaken your taste buds. All tastes will be satisfied.
            </p>
            <h1> We offer the following variety of dishes and home mad desserts</h1>
            <center>
        <table>
        <tr>
            <td>
            <p> <a href="">OUR SALADS<br>SEE ALL OUR SALADS</a></p>
            </td>
            <td>
           <a href="">" <img src ="{{ URL:: to('/image/Screenshot_3.png') }}"></a>
            </td>
        </tr>
        <tr>
        <td>
           <a href=""> <img  src ="{{ URL:: to('/image/Screenshot_4.png') }}"></a>
            </td>
            <td>
            <p> <a href=" ">OUR CARPACCIOS<br>SEE ALL OUR CARPACCIOS</a></p>
            </td>
            
        </tr>
        <tr>
            <td>
            <p ><a href=" ">OUR CHARCUTERIE BOARDS<br>SEE ALL OUR BOARDS</a></p>
            </td>
            <td>
            <a href=""><img style="" src ="{{ URL:: to('/image/Screenshot_6.png') }}"></a>
            </td>
        </tr>
        </table>
        </center>

        <p style="text-align:center;,font-size:24px;">We are recruiting every year. 
        Send your cv by email to:<br>
        <a href="management@mamakitchencaffe.com">management@mamakitchencaffe.com</a></p>
       
                

    
<footer style="text-align:center">
            
            <p class="footer-links">Terms of Use and Privacy Policy</p>
                  
                  
            <div class="col-md-4">&copy; 2019, Created by <a href="">Kikirui Denis</a></div>
                  
            <div class="col-md-4"> 
             
                    
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
