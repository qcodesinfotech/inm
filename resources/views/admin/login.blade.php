
<div class="overlay">
    <!-- LOGN IN FORM by Omar Dsoky -->
    <form action="userlogin" method="POST">
        @csrf 
        <div class="con">
            <header class="head-form">
                <h2>Log In</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>login here using your username and password</p>
            </header>
            <!--     End  header Content  -->
            <br>
       
            @if (session()->has('warning'))
            <h4 class="alert alert-danger" style="color: red;margin-top: 2%;width: 50%;text-align: center;">
                {{ session()->get('warning') }}
            </h4>
           @endif
            <div class="field-set">
                <!--   user name -->
                <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                </span>
                <!--   user name Input-->
                <input class="form-input" id="txt-input" type="text" name="username" placeholder="UserName" required>
                <br>
                <!--   Password -->
                <span class="input-item">
                    <i class="fa fa-key"></i>
                </span>
                <!--   Password Input-->
                <input  class="form-input" type="password" placeholder="Password" id="pwd" name="password" required>
                <!--      Show/hide password  -->
                <span>
                    <!-- <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i> -->
                </span>
                <br>
                <!--        buttons -->
                <!--      button LogIn -->
                <button  type="submit" class="log-in"> Log In </button>
            </div>
  
           
        </div>
        <!-- End Form -->
    </form>
</div>


<script>
    window.onload = function() {
        setTimeout(function() {
            let alertDangerElements = document.getElementsByClassName("alert-danger");
if (alertDangerElements.length > 0) {
    alertDangerElements[0].classList.add("d-none");
}
        }, 1000); // 5000 milliseconds = 5 seconds
        setTimeout(function() {
            let alertDangerElements = document.getElementsByClassName("alert-success");
if (alertDangerElements.length > 0) {
    alertDangerElements[0].classList.add("d-none");
}
        }, 1000); // 5000 milliseconds = 5 seconds
    }
</script>
<style>
   /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
/* End Fonts */
/* Start Global rules */
.field-set input{
    width:250px !important;
} 
button{
    width:260px !important;
} 
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* End Global rules */
.d-none{
display: none;
}
/* Start body rules */
body {
    background-image: linear-gradient(-225deg, #E3FDF5 0%, #F4CD53 100%);
background-image: linear-gradient(to top, #a8edea 0%, #F4CD53 100%);
background-attachment: fixed;
  background-repeat: no-repeat;

    font-family: 'Vibur', cursive;
/*   the main font */
    font-family: 'Abel', sans-serif;
opacity: .95;
/* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
}



form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #F4CD53 50%);
}
/* form Container */
form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

/* the header form form */
header {
    margin: 2% auto 10% auto;
    text-align: center;
}
/* Login title form form */
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
/*  A welcome message or an explanation of the login form */
header p {letter-spacing: 0.05em;}


.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}



/* Show/hide password Font Icon */
#eye {
    background: #fff;
    color: #333;
  
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
  
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    
    cursor: pointer;
}
/* inputs form  */
input[class="form-input"]{
    width: 240px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 250px;}
/* focus  */
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}


button {
    display: inline-block;
    color: #252537;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}
/* Submits */
.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}



/* buttons hover */
button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

/* buttons hover Animation */
button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}
 
</style>