
@extends('layouts.app')

@section('content')

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
                position: ;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                
                width:100%;
            }

            .title {
                text-align:center;
                font-size: 84px;
                background:blue;
                color:white;
            }
            .form{
                width:100%;
                 height:206px
                  border:0; 
                  cellpadding:0; 
                  cellspacing:0;
            }
            .footer{
                    width:800px;
                    height:79px;
                    background-color:black;
                    text-align:center;
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
                height:600px;
            }



            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <body>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

            <div class="content">
                <div class="title m-b-md">
                    Mamma Kitchen Restaurant
                </div>
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="links">
                    <a href="#">Home</a>
                    <a href="/service">Service</a>
                    <a href="/blog">Blog</a>
                   
                    </div>
                    </div>
                </div>

                <div class="links">
                @section('content')
               
        <img src ="{{ URL:: to('/image/Screenshot_2.png') }}"  class="image1">


        <p>
            Stop by and discover all the Kenya flavors through our dishes, our planks to share and our home made desserts.
            Our menu offers a varied choice of pasta, pizzas and salads without forgeting the famous mialanes schnitzel.
            Our gtenerous dishes will awaken your taste buds. All tastes will be satisfied.
            </p>
           

        <p style="text-align:center;,font-size:24px;">We are recruiting every year. 
        Send your cv by email to:<br>
        <a href="management@mamakitchencaffe.com">management@mamakitchencaffe.com</a></p>
       
                

    
<footer style="text-align:center">
            
            <p class="footer-links">Terms of Use and Privacy Policy</p>
                  
                  
            <div class="col-md-4">&copy; 2019, Created by <a href="">Kikirui Denis</a></div>
                  
            <div class="col-md-4"> 
             
                    
            <ul class="social">
                      
            <a href=""> <img style="width:40px;height:45px;"src ="{{ URL:: to('/image/twitter.jpg') }}"></a> Twitter     
             <a href=""> <img style="width:40px;height:45px;"src ="{{ URL:: to('/image/facebook.jpg') }}"></a> Facebook       
            
            </ul>   
            </div>
                
            </div>
              
            
            </footer>
    </body>
</html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
