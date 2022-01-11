<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">

    <!-- Bootstrap CSS -
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
       <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="./css/swiper-bundle.min.css"
    />
    <link rel="stylesheet" type="text/css" href="./css/web-app.css">

    <!-- Demo styles -->
    <style>
    
    .welcome-container{
      width:90%;
      height:20rem;
      margin-left: 0;     
      border-radius: 12px;
      background: #ccc;

    }

    .greeting_switch{
      width: 12.5rem;
      height: 12.5rem;
      border-radius: 50%;
      background: grey;
      position: absolute;
      margin: 5%;
      margin-left: 65%;
     
    }
    .text{
      position: absolute;
      top: 135px;
      left: 120px;
      font-size: 3.5rem;
      color: #fff;
    }
    .services{
      width:90%;
      height:relative;
      margin-left: 0;

      margin-top: 5rem;     
      border-radius: 12px;
      background: #ccc;

    }
    .service_box{
     width: 5rem;
     height: 5rem;
     border-radius: 12px;
     
     margin-left: 3rem;
     margin-top: 3rem;
     background: #fff;
     display: inline-block;
    }
     
      
    .mySwiper{
      margin-top: 3rem;
      margin-right: 9rem;
      background: #fff;
      height: 27rem;
      width: 90%;
      border-radius: 24px;
    }
    .mySwiper .swiper-wrapper .swiper-slide{
      margin-top: 0rem;
      width:27rem !important;
        height: 20rem;
        text-align: center;
        font-size: 18px;
        border-radius: 22px;
        background: #ccc;
        margin-right:2rem;
        margin-bottom: 2.75rem;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .small_slide .swiper-wrapper .swiper-slide {
       border-radius:50%;
       width: 10rem !important;
       height:10rem !important;
       background: #ccc;
       margin-left: 80px;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
      .tag-slider .swiper-wrapper  .swiper-slide{
        width: 13rem !important;
        height: 2.75rem ;
        margin: 2rem 2rem 2rem 2rem !important;
      }
       .chip-own{
         width :15rem;
         height: 2.75rem;
         background: #ccc;
         border-radius: 12px;
         object-fit: cover;
        text-align:center;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
       }
       .label{
       position: absolute;
       top: 25px;
        width: 100%;
        position: bottom;
        background: orange;
        color: #fff;
       }
       .pages{
        width: 5rem;
        height: 5rem;
        text-align: center;
        font-size:1.25rem;
        display: grid;
        place-items: center;
        color: #fff;
        border-bottom-right-radius: 22px;
        border-top-left-radius: 22px;
        background: orange;
        position: absolute;
        top: 75%;
        left: 81.5%;
       }
       .pages p{
        font-size: 0.75rem;
       }

       .wish_list{
        width: 5rem;
        height: 5rem;
        text-align: center;
        font-size:2.21rem;
        display: grid;
        place-items: center;
        color: #fff;
        border-bottom-left-radius: 22px;
        border-top-right-radius: 22px;
        background: orange;
        position: absolute;
        top: 75%;
        left: 0;
       }
       .mt-2{
        margin-top: 2rem;
        display: inline-block;

       }
       .txt-align-right{
        display: inline-block;
        text-align: right;
        position: absolute;
        right: 10rem;
       }
    </style>
  </head>

  <body>
    <?php include 'sidebar.php'?>
    <div class="welcome-container">
     <div class="text">Welcome Atul Kumar</div> 
     <div class="greeting_switch">
     
     </div>
     </div>
    <div class="services">
     <div class="service_box">
      <i class=""></i>

     </div>
     <div class="service_box">
      <i class=""></i>

     </div>
    <div class="service_box">
      <i class=""></i>

     </div>
       <div class="service_box">
      <i class=""></i>

     </div>
     <div class="service_box">
      <i class=""></i>

     </div>
    <div class="service_box">
      <i class=""></i>

     </div>
      <div class="service_box">
      <i class=""></i>

     </div>
     <div class="service_box">
      <i class=""></i>

     </div>
    <div class="service_box">
      <i class=""></i>

     </div>
       <div class="service_box">
      <i class=""></i>

     </div>
     <div class="service_box">
      <i class=""></i>

     </div>
    <div class="service_box">
      <i class=""></i>

     </div>
          <div class="service_box">
      <i class=""></i>

     </div>
     <div class="service_box">
      <i class=""></i>

     </div>
    <div class="service_box">
      <i class=""></i>

     </div>
      <div class="service_box">
      <i class=""></i>

     </div>
          <div class="service_box">
      <i class=""></i>

     </div>
     <div class="service_box">
      <i class=""></i>

     </div>
    <div class="service_box">
      <i class=""></i>

     </div>
      <div class="service_box">
      <i class=""></i>

     </div>
     



     </div>
     </div>
    
    
    <!-- Swiper -->
    <h4 class="mt-2">E-books</h4>
    <h4 class="txt-align-right mt-2">View All >></h4>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Book 1
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
         <div class="swiper-slide">Book 2
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
         <div class="swiper-slide">Book 3
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
         <div class="swiper-slide">Book 4
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
               <div class="swiper-slide">Book 5
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
         <div class="swiper-slide">Book 6
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
         <div class="swiper-slide">Book 7
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
         <div class="swiper-slide">Book 8
        <div class="wish_list">+</div>  
        <div class="pages"><p>no of page </p>499</div>  
        <div class="label">Buy only $99/-</div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

     <!-- Swiper -->
    <h4 class="mt-2">Audio Books</h4>
    <h4 class="txt-align-right mt-2">View All >></h4>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Audio Book 1
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>6.79M</div>  
        <div class="label">Buy only $3.50/-</div>
        </div>
         <div class="swiper-slide">Audio Book 2
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchase</p>5.28M</div>  
        <div class="label">Buy only $3.50/-</div>
        </div>
         <div class="swiper-slide">Audio Book 3
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>4.71M</div>  
        <div class="label">Buy only $2.75/-</div>
        </div>
         <div class="swiper-slide">Audio Book 4
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.81M</div>  
        <div class="label"> <strike>$19</strike> $0/Free</div>
        </div>
               <div class="swiper-slide">Audio Book 5
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchases</p>3.19M</div>  
        <div class="label">Buy only $2.21/-</div>
        </div>
         <div class="swiper-slide">Audio Book 6
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchases</p>3.12M</div>  
        <div class="label">Buy only $1/-</div>
        </div>
         <div class="swiper-slide">Audio Book 7
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.17M</div>  
        <div class="label">Buy only $1.25/-</div>
        </div>
         <div class="swiper-slide">Test Series 8
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase</p>2.96M</div>  
        <div class="label">Buy only $7.9/-</div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

     <h4 class="mt-2">Test Series</h4>
    <h4 class="txt-align-right mt-2">View All >></h4>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Test Series 1
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>5.9M</div>  
        <div class="label">Buy only $1.75/-</div>
        </div>
         <div class="swiper-slide">Test Series 2
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchase</p>4.1M</div>  
        <div class="label">Buy only $2.75/-</div>
        </div>
         <div class="swiper-slide">Test Series 3
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.9M</div>  
        <div class="label">Buy only $2.21/-</div>
        </div>
         <div class="swiper-slide">Test Series 4
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.21M</div>  
        <div class="label"> <strike>$99</strike> $0/Free</div>
        </div>
               <div class="swiper-slide">Test Series 5
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchases</p>3.19M</div>  
        <div class="label">Buy only $1/-</div>
        </div>
         <div class="swiper-slide">Test Series 6
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchases</p>3.12M</div>  
        <div class="label">Buy only $1/-</div>
        </div>
         <div class="swiper-slide">Test Series 7
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.7M</div>  
        <div class="label">Buy only $1.1/-</div>
        </div>
         <div class="swiper-slide">Test Series 8
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase</p>3.2M</div>  
        <div class="label">Buy only $5.01/-</div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    
     <h4 class="mt-2">Test Series</h4>
    <h4 class="txt-align-right mt-2">View All >></h4>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Test Series 1
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>5.9M</div>  
        <div class="label">Buy only $1.75/-</div>
        </div>
         <div class="swiper-slide">Test Series 2
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchase</p>4.1M</div>  
        <div class="label">Buy only $2.75/-</div>
        </div>
         <div class="swiper-slide">Test Series 3
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.9M</div>  
        <div class="label">Buy only $2.21/-</div>
        </div>
         <div class="swiper-slide">Test Series 4
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.21M</div>  
        <div class="label"> <strike>$99</strike> $0/Free</div>
        </div>
               <div class="swiper-slide">Test Series 5
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchases</p>3.19M</div>  
        <div class="label">Buy only $1/-</div>
        </div>
         <div class="swiper-slide">Test Series 6
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Puchases</p>3.12M</div>  
        <div class="label">Buy only $1/-</div>
        </div>
         <div class="swiper-slide">Test Series 7
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase </p>3.7M</div>  
        <div class="label">Buy only $1.1/-</div>
        </div>
         <div class="swiper-slide">Test Series 8
        <div class="wish_list">+</div>  
        <div class="pages"><p>Total Purchase</p>3.2M</div>  
        <div class="label">Buy only $5.01/-</div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>  

    <!-- Swiper JS -->
    <script src="./js/swiper-bundle.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



        <!--=============== MAIN JS ===============-->
        <script src="./js/vendor/jquery-1.12.4.min.js"></script>
        <!--<script src="./js/owl.carousel.min.js"></script>-->
      
        <script src="./js/materialize.min.js"></script>
          <script src="./js/web-app.js"></script>
         <script>
      var swiper = new Swiper(".mySwiper", {
         slidesPerView:3,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
       var swiper = new Swiper(".tag-slider", {
        slidesPerView:5,
        spaceBetween: 2,
        
      });
         var swiper = new Swiper(".small_slide", {
        slidesPerView:5,
        spaceBetween: 30,
        
      });
    </script> 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>