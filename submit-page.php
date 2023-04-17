<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
body {
  font-family:'Roboto';
  background-color: #131417;  
}
p {
  text-shadow: 0 0 7px rgba(255,255,255,.3), 0 0 3px rgba(255,255,255,.3);
  font-family: cambria;
  font-size: 1em;


}
.container {
  color: #e5e5e5;
  font-size: 2.26rem;
  text-transform: uppercase;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.animation {
  height:50px;
  overflow:hidden;
  margin-left: 1rem;
}

.animation > div > div {
  padding: 0.25rem 0.75rem;
  height:2.81rem;
  margin-bottom: 2.81rem;
  display:inline-block;
}

.animation div:first-child {
  animation: text-animation 5s infinite;
}

.first div {
  background-color:#20a7d8;
   border-radius:10px;
}
.second div {
  background-color:#CD921E;
   border-radius:10px;
}
.third div {
  background-color:#c10528;
  border-radius:10px;
}

@keyframes text-animation {
  0% {margin-top: 0;}
  10% {margin-top: 0;}
  20% {margin-top: -5.62rem;}
  30% {margin-top: -5.62rem;}
  40% {margin-top: -11.24rem;}
  60% {margin-top: -11.24rem;}
  70% {margin-top: -5.62rem;}
  80% {margin-top: -5.62rem;}
  90% {margin-top: 0;}
  100% {margin-top: 0;}
}
.home{
	 position: absolute;
        top: 60%;
        align-items: center;

       
}
nav {
  height: 100vh;
  display: grid;
  place-items: center;
}

</style>
</head>
<body>
<main class="container">
  <p>Thanks For Your👋 </p>
  <section class="animation">
    <div class="first"><div>FEEDBACK</div></div>
    <div class="second"><div>RESPONSE</div></div>
    <div class="third"><div>PATIENCE</div></div>
  </section>
  <div class="home">
			<a href="index.php"><img height="50"  src="home.png"></a>
      <form >





</form>

  </div>
</main>
</body>
</html>