<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>John gike Service</title>
    
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

        *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        }

        body{
        background: #e1ecf2;
        }

        .wrapper{
        margin: 10px;
        }

        .wrapper .top_navbar{
        width: calc(100% - 20px);
        height: 60px;
        display: flex;
        position: fixed;
        top: 10px;
        }

        .wrapper .top_navbar .hamburger{
        width: 70px;
        height: 100%;
        background: #2e4ead;
        padding: 15px 17px;
        border-top-left-radius: 20px;
        cursor: pointer;
        }

        .wrapper .top_navbar .hamburger div{
        width: 35px;
        height: 4px;
        background: #92a6e2;
        margin: 5px 0;
        border-radius: 5px;
        }

        .wrapper .top_navbar .top_menu{
        width: calc(100% - 70px);
        height: 100%;
        background: #fff;
        border-top-right-radius: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
        }

        .wrapper .top_navbar .top_menu .logo{
        color: #2e4ead;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 3px;
        }

        .wrapper .top_navbar .top_menu ul{
        display: flex;
        }

        .wrapper .top_navbar .top_menu ul li a{
        display: block;
        margin: 0 10px;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border: 1px solid #2e4ead;
        border-radius: 50%;
        color: #2e4ead;
        }

        .wrapper .top_navbar .top_menu ul li a:hover{
        background: #4360b5;
        color: #fff;
        }

        .wrapper .top_navbar .top_menu ul li a:hover i{
        color: #fff;
        }

        .wrapper .sidebar{
        position: fixed;
        top: 70px;
        left: 10px;
        background: #2e4ead;
        width: 200px;
        height: calc(100% - 80px);
        border-bottom-left-radius: 20px;
        transition: all 0.3s ease;
        }

        .wrapper .sidebar ul li a{
            display: block;
            padding: 20px;
            color: #fff;
            position: relative;
            margin-bottom: 1px;
            color: #92a6e2;
            white-space: nowrap;
        }

        .wrapper .sidebar ul li a:before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background: #92a6e2;
        display: none;
        }

        .wrapper .sidebar ul li a span.icon{
        margin-right: 10px;
        display: inline-block;
        }

        .wrapper .sidebar ul li a span.title{
        display: inline-block;
        }

        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active{
        background: #4360b5;
        color: #fff;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before{
        display: block;
        }

        .wrapper .main_container{
        width: (100% - 200px);
        margin-top: 70px;
        margin-left: 200px;
        padding: 15px;
        transition: all 0.3s ease;
        }

        .wrapper .main_container .item{
        background: #fff;
        margin-bottom: 10px;
        padding: 15px;
        font-size: 14px;
        line-height: 22px;
        }

        .wrapper.collapse .sidebar{
        width: 70px;
        }

        .wrapper.collapse .sidebar ul li a{
        text-align: center; 
        }

        .wrapper.collapse .sidebar ul li a span.icon{
        margin: 0;
        }

        .wrapper.collapse .sidebar ul li a span.title{
        display: none;
        }

        .wrapper.collapse .main_container{
        width: (100% - 70px);
        margin-left: 70px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
  
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">
         John Bikes
      </div>
      <ul>
        <li><a href="{{route('dashboard')}}">
          <i class="fas fa-home"></i>
          </a></li>
        <li><a href="{{route('profile.edit')}}">
          <i class="fas fa-user"></i>
          <form method="POST" action="{{ route('logout') }}" id="logout-form">
            @csrf
          </form>
        <li><a class="dropdown-item" href="#"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-power-off"></i>
            </a>
        </li>
          
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="{{route('dashboard')}}">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Overview</span>
          </a></li>
        <li><a href="{{route('service.index')}}">
          <span class="icon"><i class="fas fa-cogs"></i></span>
          <span class="title">services</span>
          </a></li>
        <li><a href="{{route('profile.edit')}}">
          <span class="icon"><i class="fas fa-user"></i></span>
          <span class="title">profile</span>
          </a></li>
        <!-- <li><a href="#" class="active">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Blogs</span>
          </a></li> -->
        <li><a href="{{route('contact')}}">
          <span class="icon"><i class="fas fa-address-card"></i></span>
          <span class="title">Contacts</span>
          </a></li>
          <li><a href="{{route('service.create')}}">
          <span class="icon"><i class="fas fa-motorcycle"></i></span>
          <span class="title">Book Now</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
    @yield('content')
    <!-- <div class="item">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sapiente adipisci nemo atque eligendi reprehenderit minima blanditiis eum quae aspernatur!
    </div> -->
  </div>
</div>
</body>
<script>
    $(".hamburger").click(function(){
   $(".wrapper").toggleClass("collapse");
});
</script>
</html>