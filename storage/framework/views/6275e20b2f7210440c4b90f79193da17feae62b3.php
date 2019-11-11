<?php $__env->startSection('title', 404); ?>
<?php $__env->startSection('message'); ?>

<style>

* {
  box-sizing: border-box;
}
.box {
  width: 350px;
  height: 100%;
  max-height: 600px;
  min-height: 450px;
  background: linear-gradient(90deg, #1CB3C8, #2572D9, #51E1FF);
  background-size: 600% 50%;
  animation: bggradient 10s linear infinite;
  animation-direction: alternate;   border-radius: 20px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  padding: 30px 50px;
}
@keyframes  bggradient {
    0% {
        background-position: 0%
    }
    100% {
        background-position: 100%
    }
}
.box .box_ghost {
  padding: 15px 25px 25px;
  position: absolute;
  left: 50%;
  top: 30%;
  transform: translate(-50%, -30%);
}
.box .box_ghost .symbol:nth-child(1) {
  opacity: 0.2;
  animation: shine 4s ease-in-out 3s infinite;
}
.box .box_ghost .symbol:nth-child(1):before, .box .box_ghost .symbol:nth-child(1):after {
  content: '';
  width: 12px;
  height: 4px;
  background: #000;
  position: absolute;
  border-radius: 5px;
  bottom: 65px;
  left: 0;
}
.box .box_ghost .symbol:nth-child(1):before {
  transform: rotate(45deg);
}
.box .box_ghost .symbol:nth-child(1):after {
  transform: rotate(-45deg);
}
.box .box_ghost .symbol:nth-child(2) {
  position: absolute;
  left: -5px;
  top: 30px;
  height: 18px;
  width: 18px;
  border: 4px solid;
  border-radius: 50%;
  border-color: #000;
  opacity: 0.2;
  animation: shine 4s ease-in-out 1.3s infinite;
}
.box .box_ghost .symbol:nth-child(3) {
  opacity: 0.2;
  animation: shine 3s ease-in-out 0.5s infinite;
}
.box .box_ghost .symbol:nth-child(3):before, .box .box_ghost .symbol:nth-child(3):after {
  content: '';
  width: 12px;
  height: 4px;
  background: #000;
  position: absolute;
  border-radius: 5px;
  top: 5px;
  left: 40px;
}
.box .box_ghost .symbol:nth-child(3):before {
  transform: rotate(90deg);
}
.box .box_ghost .symbol:nth-child(3):after {
  transform: rotate(180deg);
}
.box .box_ghost .symbol:nth-child(4) {
  opacity: 0.2;
  animation: shine 6s ease-in-out 1.6s infinite;
}
.box .box_ghost .symbol:nth-child(4):before, .box .box_ghost .symbol:nth-child(4):after {
  content: '';
  width: 15px;
  height: 4px;
  background: #000;
  position: absolute;
  border-radius: 5px;
  top: 10px;
  right: 30px;
}
.box .box_ghost .symbol:nth-child(4):before {
  transform: rotate(45deg);
}
.box .box_ghost .symbol:nth-child(4):after {
  transform: rotate(-45deg);
}
.box .box_ghost .symbol:nth-child(5) {
  position: absolute;
  right: 5px;
  top: 40px;
  height: 12px;
  width: 12px;
  border: 3px solid;
  border-radius: 50%;
  border-color: #000;
  opacity: 0.2;
  animation: shine 1.7s ease-in-out 7s infinite;
}
.box .box_ghost .symbol:nth-child(6) {
  opacity: 0.2;
  animation: shine 2s ease-in-out 6s infinite;
}
.box .box_ghost .symbol:nth-child(6):before, .box .box_ghost .symbol:nth-child(6):after {
  content: '';
  width: 15px;
  height: 4px;
  background: #000;
  position: absolute;
  border-radius: 5px;
  bottom: 65px;
  right: -5px;
}
.box .box_ghost .symbol:nth-child(6):before {
  transform: rotate(90deg);
}
.box .box_ghost .symbol:nth-child(6):after {
  transform: rotate(180deg);
}
.box .box_ghost .box_ghost-container {
  background: #fff;
  width: 100px;
  height: 100px;
  border-radius: 100px 100px 0 0;
  position: relative;
  margin: 0 auto;
  animation: upndown 3s ease-in-out infinite;
}
.box .box_ghost .box_ghost-container .box_ghost-eyes {
  position: absolute;
  left: 50%;
  top: 45%;
  height: 12px;
  width: 70px;
}
.box .box_ghost .box_ghost-container .box_ghost-eyes .box_eye-left {
  width: 12px;
  height: 12px;
  background: #000;
  border-radius: 50%;
  margin: 0 10px;
  position: absolute;
  left: 0;
}
.box .box_ghost .box_ghost-container .box_ghost-eyes .box_eye-right {
  width: 12px;
  height: 12px;
  background: #000;
  border-radius: 50%;
  margin: 0 10px;
  position: absolute;
  right: 0;
}
.box .box_ghost .box_ghost-container .box_ghost-bottom {
  display: flex;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
}
.box .box_ghost .box_ghost-container .box_ghost-bottom div {
  flex-grow: 1;
  position: relative;
  top: -10px;
  height: 20px;
  border-radius: 100%;
  background-color: #fff;
}
.box .box_ghost .box_ghost-container .box_ghost-bottom div:nth-child(2n) {
  top: -12px;
  margin: 0 0px;
  border-top: 15px solid #000;
  background: transparent;
}
.box .box_ghost .box_ghost-shadow {
  height: 20px;
  box-shadow: 0 50px 15px 5px #3b3769;
  border-radius: 50%;
  margin: 0 auto;
  animation: smallnbig 3s ease-in-out infinite;
}
.box .box_description {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
}
.box .box_description .box_description-container {
  color: #fff;
  text-align: center;
  width: 200px;
  font-size: 16px;
  margin: 0 auto;
}
.box .box_description .box_description-container .box_description-title {
  font-size: 24px;
  letter-spacing: 0.5px;
}
.box .box_description .box_description-container .box_description-text {
  color: #fff;
  line-height: 20px;
  margin-top: 20px;
}
.box .box_description .box_button {
  display: block;
  position: relative;
  background: transparent;
  border: 1px solid transparent;
  border-radius: 50px;
  height: 50px;
  text-align: center;
  font-weight: bold;
  text-decoration: none;
  color: #fff;
  line-height: 50px;
  font-size: 19px;
  padding: 0 70px;
  white-space: nowrap;
  margin-top: 25px;
  transition: background 0.5s ease;
  overflow: hidden;
  -webkit-mask-image: -webkit-radial-gradient(white, black);
}
.box .box_description .box_button:before {
  content: '';
  position: absolute;
  width: 20px;
  height: 100px;
  background: #fff;
  bottom: -25px;
  left: 0;
  border: 2px solid #fff;
  transform: translateX(-50px) rotate(45deg);
  transition: transform 0.5s ease;
}
.box .box_description .box_button:hover {
  background: transparent;
  border-color: #fff;
}
.box .box_description .box_button:hover:before {
  transform: translateX(250px) rotate(45deg);
}
@keyframes  upndown {
  0% {
    transform: translateY(5px);
  }
  50% {
    transform: translateY(15px);
  }
  100% {
    transform: translateY(5px);
  }
}
@keyframes  smallnbig {
  0% {
    width: 90px;
  }
  50% {
    width: 100px;
  }
  100% {
    width: 90px;
  }
}
@keyframes  shine {
  0% {
    opacity: 0.2;
  }
  25% {
    opacity: 0.1;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 0.2;
  }
}

</style>


<div class="box">
  <div class="box_ghost">
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    <div class="symbol"></div>
    
    <div class="box_ghost-container">
      <div class="box_ghost-eyes">
        <div class="box_eye-left"></div>
        <div class="box_eye-right"></div>
      </div>
      <div class="box_ghost-bottom">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="box_ghost-shadow"></div>
  </div>
  
  <div class="box_description">
    <div class="box_description-container">
      <div class="box_description-title">Lo sentimos</div>
      <div class="box_description-text">no pudimos encontrar la página que estabas buscando</div>
    </div>
    
    <a href="<?php echo e(route('noticias')); ?>"  class="box_button">Regresar</a>
    
  </div>
  
</div>

<script>

var balls =document.getElementsByClassName("box_ghost-eyes");

document.onmousemove = function(){
	//event.clientX => get the horizontal coordinate of the mouse
	var x = event.clientX * 90 / window.innerWidth + "%";

	//event.clientY => get the vertical coordinate of the mouse
	var y = event.clientY * 80 / window.innerHeight  + "%";

	for (var i = 0; i < 2; i++){
		balls[i].style.left = x;
		balls[i].style.top = y;
		balls[i].style.transform = "translate(-"+x+",-"+y+")";
	}
}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/1/intranet2/resources/views/errors/404.blade.php ENDPATH**/ ?>