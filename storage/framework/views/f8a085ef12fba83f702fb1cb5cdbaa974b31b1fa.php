<?php $__env->startSection('title', 403); ?>
<?php $__env->startSection('message'); ?>

<style>


.main-wrapper {
  font-size: 6vmin;
  margin-top: -200px;
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
}
.signboard-wrapper {
  width: 75vmin;
  height: 55vmin;
  margin: 20px;
  position: relative;
  flex-shrink: 0;
  transform-origin: center 2.5vmin;
  animation: 1000ms init forwards, 1000ms init-sign-move ease-out 1000ms, 3000ms sign-move 2000ms infinite;
}
.signboard-wrapper .signboard {
  color: #fff;
  font-weight: bold;
  background: linear-gradient(90deg, #1CB3C8, #2572D9, #51E1FF);
  background-size: 600% 50%;
  animation: bggradient 10s linear infinite;
  animation-direction: alternate;   width: 100%;
  height: 35vmin;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  bottom: 0;
  border-radius: 4vmin;
  text-shadow: 0 -0.015em #be2b00;
}

.signboard-wrapper .box_button {
  display: block;
  position: absolute;
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
  text-shadow: 0 -0.015em #be2b00;
  margin-top: 285px;
  margin-left: 125px;
  transition: background 0.5s ease;
  overflow: hidden;
  -webkit-mask-image: -webkit-radial-gradient(white, black);
}

.signboard-wrapper .box_button:before {
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
.signboard-wrapper .box_button:hover {
  background: transparent;
  border-color: #fff;
}
.signboard-wrapper .box_button:hover:before {
  transform: translateX(250px) rotate(45deg);
}

@keyframes  bggradient {
    0% {
        background-position: 0%
    }
    100% {
        background-position: 100%
    }
}
.signboard-wrapper .string {
  width: 30vmin;
  height: 30vmin;
  border: solid 0.9vmin #000;
  border-bottom: none;
  border-right: none;
  position: absolute;
  left: 50%;
  transform-origin: top left;
  transform: rotatez(45deg);
}
.signboard-wrapper .pin {
  width: 5vmin;
  height: 5vmin;
  position: absolute;
  border-radius: 50%;
}
.signboard-wrapper .pin.pin1 {
  background-color: #9f9f9f;
  top: 0;
  left: calc(50% - 2.5vmin);
}
.signboard-wrapper .pin.pin2, .signboard-wrapper .pin.pin3 {
  background-color: #9f9f9f;
  top: 21.5vmin;
}
.signboard-wrapper .pin.pin2 {
  left: 13vmin;
}
.signboard-wrapper .pin.pin3 {
  right: 13vmin;
}
@keyframes  init {
  0% {
    transform: scale(0);
  }
  40% {
    transform: scale(1.1);
  }
  60% {
    transform: scale(0.9);
  }
  80% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes  init-sign-move {
  100% {
    transform: rotatez(3deg);
  }
}
@keyframes  sign-move {
  0% {
    transform: rotatez(3deg);
  }
  50% {
    transform: rotatez(-3deg);
  }
  100% {
    transform: rotatez(3deg);
  }
}
</style>
<div class="main-wrapper">
    <div class="signboard-wrapper">
        <div class="signboard">Acceso no autorizado </div>
        <a href="<?php echo e(route('noticias')); ?>"  class="box_button">Regresar</a>
        <div class="string"></div>
        <div class="pin pin1"></div>
        <div class="pin pin2"></div>
        <div class="pin pin3"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/errors/403.blade.php ENDPATH**/ ?>