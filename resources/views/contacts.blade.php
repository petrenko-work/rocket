@extends('layouts.app')

@section('title', 'project')

@section('content')
	
	<div class="mapWrapper">
		<div id="map"></div>
	    <script>
	      function initMap() {
	        var uluru = {lat: 50.428294, lng: 30.638176};
	        var image =  'images/logo-icon.png';
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 17,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map,
	          icon: image
	         });
	      }
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP5rh2lp3Lck0yCuvfIJbAaDT81KwucGU&callback=initMap">
	    </script>
	</div>

	<div class="contactsWrapper">
		<div class="container">
			<div class="contactsFlex">
				<div class="contactsItem">
					<h2>Контакты</h2>
					<ul>
						<li class="build">г. Киев<br> ул. Привокзальная, 1а<br> (м. Дарница, м. Харьковская)</li>
						<li class="telephoneIcon"><a href="tel:+380673585151">+38 (067) 358 51 51</a></li>
						<li class="mailIcon">info@instapromo.com.ua</li>
					</ul>
				</div>
				<div class="contactsItem">
					<div class="mainForm">
						<div class="mainFormHeader">
							Обратная связь
						</div>
						<form>
							<input type="text" placeholder="Ваше имя">
							<input type="text" placeholder="Ваш телефон">
							<input type="mail" placeholder="Ваша почта">
							<textarea placeholder="Сообщение"></textarea>
							<input type="submit" value="отправить">
							<img src="images/decoration.png" alt="decoration">
						</form>
					</div>
				</div>
				<div class="contactsItem">
					<h2>Время работы</h2>
					<ul>
						<li class="clockIcon">пн-сб:	10:00-20:00<br><span class="hiddenElem">пн-</span>вс:  11:00-18:00</li>
						<li class="please">Перед приездом к нам в гости,<br> позвоните зарание, пожалуйста,<br> чтобы специалист, с которым Вы<br> хотите пообщаться был в офисе </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection