<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Wallet</title>
  <link rel="shortcut icon" type="image" href="{{ asset('img/wallet2.png') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/favicon.svg')}}">
  <style>
    html {
      scroll-behavior: smooth;
    }
    body{
      background-color: #0F0823;
    }
    .hero{
       background: radial-gradient(farthest-side at bottom right, rgba(161, 44, 217, 0.5), transparent);
       padding-top: 9%;
    } 
    .wallet{
      width: 30px;
    }
    .logo{
      width: 18px;
    }
    .btn{
      background: linear-gradient(to right, #a12cd9, #E845E5, #ff91d1);
    }
    .gbrdiv{
      display: block;
      width: 450px;
      height: 100vh;
      background-color: rgba(161, 44, 217, 0.2); 
      position: absolute;
      top: 0;
      right: 250px;
      z-index: -1;
    }
    .abubble {
      position: absolute;
      top: 150px;
      left: 70px;
      background-color: transparent;
      width: 100px;
      height: 100px;
      z-index: -10;
    }
    .innerbubble {
      position: absolute;
      top:0;
      left:0;
      width: 100%;
      height: 100%;
      z-index: -10;
    
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      background: transparent;
      background: -webkit-radial-gradient(center, circle cover, rgba(161, 44, 217, 0) 50%, rgba(232, 69, 229, 255) 100%);
    }
    .abubble2 {
      position: absolute;
      top: 250px;
      right: 180px;
      background-color: transparent;
      width: 150px;
      height: 150px;
      z-index: 10;
    }
    .innerbubble2 {
      position: absolute;
      top:0;
      left:0;
      width: 100%;
      height: 100%;
      z-index: 10;
    
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      background: transparent;
      background: -webkit-radial-gradient(center, circle cover, rgba(88, 22, 211, 0) 50%, rgba(174,92,212, 255) 100%);
   }
   .abubble3 {
      position: absolute;
      top: 560px;
      left: 380px;
      background-color: transparent;
      width: 200px;
      height: 200px;
      z-index: -10;
    }
    .innerbubble3 {
      position: absolute;
      top:0;
      left:0;
      width: 100%;
      height: 100%;
      z-index: -10;
    
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      background: transparent;
      background: -webkit-radial-gradient(center, circle cover, rgba(88, 22, 211, 0) 50%, rgba(249,180,235, 255) 100%);
   }
    .features{
      width: 100%;
      background: radial-gradient(farthest-side at top right, rgba(161, 44, 217, 0.5), transparent);
    } 
    .fitur img{
      position: relative;
      margin: 60px 0 0 -50px;
    }
    .fitur-icon{
      background-color:;
    }
    .support{
    );
    }
    .foot{
      background: radial-gradient(110px 60px at 50% bottom,#470246, #0F0823);
      animation: animate 5s ease-in-out infinite;
    }
    .text{
      color: #E845E5;
    }

    @keyframes animate{
    0%{
      background-color: #0F0823;
    }
    50%{
      background: radial-gradient(110px 60px at 50% bottom,#470246, #0F0823);
    }
    100%{
      background-color: #0F0823;
    }
}

    /* min-width------------------------------------- */
   @media(min-width: 1024px){
      .btn2{
        background: linear-gradient(to right, #A12CD9, #E845E5, #FF91D1);
      }
      .navchild .cancel{
       display: none;
      }
      .main{
      margin-top: -8%;
      }
      .hero .container .main{
        width: 40%;
      }
      
     }

     /* max-width------------------------------------- */
   @media(max-width: 1024px){
      body.disabled{
        overflow: hidden;
      }
      .hero{
        padding-right: 100px;
        padding-left: 100px;
      }
      .hero .container .main{
        width: 100%;
        justify-items: center;
        text-align: center;
      }
     .navchild{
       position: fixed;
       top: 0;
       right: -100%;
       height: 100vh;
       width: 100%;
       max-width: 300px;
       background-color: #A12CD9;
       display: block;
       padding: 40px 0;
       text-align: center;
       z-index: 100;
       transition: all 0.5s ease;
     }
     .navchild.show{
       right: 0;
     }
     .navchild button{
      margin-top: 20px;
     }
     .navchild .btn2{
      background-color: white;
      border: 1px solid white ;
      margin: 25px 5px 0;
      color: #A12CD9;
     }
     .navchild .btn3{
      border: 1px solid white ;
      margin: 25px 5px 0;
     }
     .navchild .cancel{
       display: block;
       position: absolute;
       right: 12px;
       top: 12px;
       cursor: pointer;
     }
     .main{
        margin-top: 0;
      }
     .gbr1{
       display: none;
     }
     .abubble2 {
      right: 50px;
    }
    .abubble3 {
      display: none;
    }
    .fitur{
      display: none;
    }
    .fitur-icon{
      width: 100%;
    }
    .fitur-icon h1{
      text-align: center;
    }
    .fitur-icon .div1 .akun{
      text-align: center;
    }
    .fitur-icon .div1 .monitor{
      text-align: center;
      margin-left: 20%;
    }
    .fitur-icon .hai{
      margin-left: 14%;
    }
    .fitur-icon .div2 .report{
      text-align: center;
      margin-left: 20%;
    }
    .fitur-icon .div2 .chart{
      text-align: center;
    }
    .fitur-icon .div3 .safe{
      text-align: center;
      margin-left: 20%;
    }
    .fitur-icon .div3 .design{
      text-align: center;
    }
    .support img{
      height: 80px;
    }

}
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">

  <nav class="nav1 flex items-center justify-between flex-wrap p-5 px-24">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
      <img class="wallet" src="{{ asset('img/wallet.png')}}" alt="">
      <span class="font-bold tracking-wider text-xl text-white">
        Wallet</span>
    </div>
    <div class="block lg:hidden">
      <button
        class="menu flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 text-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
      
    </div>
    <div class="navchild w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
      <svg class="cancel h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
      <div class="text-md lg:flex-grow">
        <a href="#home" class="link block mt-5 lg:inline-block lg:mt-0 text-white mr-5">
          Home
        </a>
        <a href="#features" class="link block mt-5 lg:inline-block lg:mt-0 text-white mr-5">
          Features
        </a>
        <a href="#contact" class="link block mt-5 lg:inline-block lg:mt-0 text-white mr-5">
          Contact
        </a>
      </div>
      <div>
        <button
          class="btn3 text-white font-normal rounded-md py-2 border-black px-4 focus:outline-none focus:shadow-outline transform transition ">
          <a href="{{ url('login')}}">Login</a>
      </button>
        <button
          class="btn2 text-white font-medium rounded-md py-2 px-4 ">
          <a href="{{ url('register')}}">Sign In</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div id="home" class="hero px-20 pl-28 bg-blue-200">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="main flex flex-col w-full justify-center items-start text-center md:text-left text-white">
        <h1 class="my-4 text-4xl font-bold leading-tight">
          The easiest way to manage your personal finance
        </h1>
        <p class="leading-normal text-1xl mb-8">
          manage your money by saving it with no charge and feel how easy to manage your personal finance and payment
        </p>
        <button
          class="btn mx-auto lg:mx-0 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline">
          <a href="{{ url('login')}}">Get stared</a>
        </button>
      </div>
      <!--Right Col-->
      <div class="gbr1 w-full md:w-3/5 text-center">
        <img class="object-fill mx-35 transform"
          src="{{ asset('img/gbr1.png')}}" />
          <div class="gbrdiv"></div>
      </div>
      <div class='abubble'>
        <div class='innerbubble'></div>
      </div>
      <div class='abubble2'>
        <div class='innerbubble2'></div>
      </div>
      <div class='abubble3'>
        <div class='innerbubble3'></div>
      </div>
    </div>
  </div>

  <!-- Features -->
  <div id="features" class="features flex justify-beetween py-20 px-10">
    
    <div class="fitur w-1/2">
      
      <img class="object-fill transform w-84"
          src="{{ asset('img/card.png')}}" />

    </div>
    <div class="fitur-icon w-1/2 py-10 ">
      <h1 class="text-white text-4xl font-bold">The Fitures</h1>
      <div class="div1 flex justify-beetween my-10">
        <div class="monitor w-1/2">
          <svg class="hai h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
          </svg>
          <p class="text-white w-1/2 pt-2">you open a remote account</p>
        </div>
        <div class="akun w-1/2">
          <svg class="hai h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          <p class="text-white w-1/2 pt-2">financing from enywhere</p>
        </div>
      </div>

      <div class="div2 flex justify-beetween my-10">
        <div class="report w-1/2">
          <svg class="hai h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
          </svg>
          <p class="text-white w-1/2 pt-2">you will get a report</p>
        </div>
        <div class="chart w-1/2">
          <svg class="hai h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
          <p class="text-white w-1/2 pt-2">automatic financial data chart</p>
        </div>
      </div>

      <div class="div3 flex justify-beetween my-10">
        <div class="safe w-1/2">
          <svg class="hai h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <p class="text-white w-1/2 pt-2">secure system and database</p>
        </div>
        <div class="design w-1/2">
          <svg class="hai h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
          </svg>
          <p class="text-white w-1/2 pt-2">simple and modern design</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Features -->
  <div class="support pb-24">
    <h1 class="text-center text-white mb-8 text-2xl font-bold">Powered By</h1>
    <div class="support-img flex h-8 mb-14 bg-red justify-center pr-12 pl-12">
      <div>
        <img class="s1 w-65 h-32" src="{{ asset('img/4.png')}}">
      </div>
      <div> 
        <img class="s2 w-65 h-32" src="{{ asset('img/5.png')}}">
      </div>
      <div>
        <img class="w-65 h-32" src="{{ asset('img/6.png')}}">
      </div>
     
    </div>
  </div>

  <!-- Footer -->
  <footer id="contact" class="foot flex items-center justify-center text-center text-white text-xs font-medium py-5 clear-left">
    <span class="text mr-2">© 2021. Allright Reserved. Design By </span><a href="https://dribbble.com/ongoingproject" target="_blank"><img class="logo pb-1" src="{{ asset('img/logo.png')}}"></a>
  </footer>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navchild");
    const menuBtn = document.querySelector(".menu");
    const cancelBtn = document.querySelector(".cancel");
    const navlink = document.querySelectorAll(".link");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    function linkAction(){
      navbar.classList.remove("show")
      body.classList.remove("disabled");
    }
    navlink.forEach(n => n.addEventListener('click', linkAction))
    
  </script>
</body>
</html>