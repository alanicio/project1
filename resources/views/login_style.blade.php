<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    
/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="data:image/jpeg;base64,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" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    @yield('content')

  </div>
</div>