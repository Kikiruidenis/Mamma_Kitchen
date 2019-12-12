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
                
                width:100%;
            }

            .title {
                font-size: 84px;
                text-align:top;
                background:blue;
                color:white;
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
           .col-md-4 col-form-label text-md-{
               width:100px;
               height:10px;
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
                height:600px;
            }
            .form{
                width:100%;
                 height:206px
                  border:1; 
                  cellpadding:0; 
                  cellspacing:0;


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       
            <div class="content">
                <div class="title m-b-md">
                Mamma Kitchen Restaurant
                </div>
                <div class="links">
                    <a href="home">Home</a>
                    <a href="/service">Service</a>
                    <a href="#">Blog</a>
                   
                    </div>

              
        <img src ="{{ URL:: to('/image/Screenshot_2.png') }}"  class="image1">
        
<br>
<div>
<form>
<label style="width:100%; ,height:20px;">Meal</label>


    <input type="text"  class="form-control @error('meal') is-invalid @enderror" 
    name="meal" value="{{ old('meal') }}" required autocomplete="meal" autofocus>

    <label >Price</label>


    <input type="number"  class="form-control @error('pice') is-invalid @enderror" 
    name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

    <label >Table</label>

    <input type="number" class="form-control @error('table') is-invalid @enderror" 
    name="table" value="{{ old('table') }}" required autocomplete="table" autofocus>

</form>
</div>
<input type="button" name="Submit" value="submit"> 

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
              <a href=""> <img style="width:40px;height:45px;"src ="{{ URL:: to('/image/twitter.jpg') }}"></a> Twitter     
             <a href=""> <img style="width:40px;height:45px;"src ="{{ URL:: to('/image/facebook.jpg') }}"></a> Facebook       
            
            </ul>   
            </footer>
    </body>
</html>
