
  <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src=" {{asset('img/bgPanel.jpg')}} ">
            <figcaption class="text-center">
                <h1>Noticias en {{$y}}</h1>
                <p> Se ha publicado un total de <strong> {{$postY}} @if($postY == 1) noticia @else noticias @endif</strong> en el año</p>
                <hr>
                <h1>Noticias en {{$m}}</h1>
                <p>Se ha publicado <strong> {{$postM}} @if($postM == 1) noticia @else noticias @endif</strong> en el lo que va del mes</p>
            </figcaption>
		</figure>
		<figure>
			<img src=" {{asset('img/bgPanel.jpg')}} ">
			<figcaption class="text-center">
                <h1>Eventos en {{$y}}</h1>
                <p> Se ha creado un total de <strong> @if($eventY == 1) evento @else eventos @endif</strong> en el año</p>
                <hr>
                <h1>Eventos en {{$m}}</h1>
                <p>Se ha creado <strong>{{$eventM}} @if($eventM == 1) evento @else eventos @endif</strong> en el lo que va del mes</p>
            </figcaption>
		</figure>
		<figure>
			<img src=" {{asset('img/bgPanel.jpg')}} ">
			<figcaption>lorem</figcaption>
		</figure>
		
	</figure>
</div>

<style>
    
@keyframes slider {
    0% { left: 0%; }
    20% { left: 0%; }
    25% { left: -100%; }
    45% { left: -100%; }
    50% { left: -200%; }
    70% { left: -200%; }
    75% { left: -300%; }
    95% { left: -300%; }
    100% { left: -400%; }
}
* {
  box-sizing: border-box;
}
body, figure { 
  margin: 0; background: #101010;
  font-family: 'nunito', sans-serif;
}
div#captioned-gallery { 
  width: 100%; overflow: hidden; 
}
figure.slider { 
  position: relative; width: 500%;
  font-size: 0; 
  animation: 30s slider infinite ease; 
}
figure.slider figure { 
  width: 20%; height: auto;
  display: inline-block;  position: inherit; 
}
figure.slider img { width: 100%; height: auto; }
figure.slider figure figcaption { 
  position: absolute; bottom: 0;
  background: rgba(0,0,0,0.4);
  color: #fff; width: 100%;
  font-size: 2rem; padding: .6rem; 
}
</style>