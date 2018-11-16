@extends('layouts.app')

@section('title', 'project')

@section('content')
	
	<div class="aboutUs">
		<div class="container">
			<div class="aboutFlex">
				<div class="aboutFlexBlock1">
					<div class="aboutFlexHeader">
						<h1>О нас<span class="pinkMarker">.</span></h1>
					</div>
					<ul class="aboutList">
						<li><span class="blueText">ItnstaPromo</span> - Команда, которая <span class="darkBlueText">первая на рынке Украины</span> предоставила<br> профессиональную услугу по построению бизнеса в <span class="pinkText">Instagram</span></li>
						<li>Работаем с 2014 года только с <span class="pinkText">Instagram</span></li>
						<li>Мы измеряем опыт не годами, а проделанной работой - <span class="darkBlueText">189 бизнесов<br> раскручено</span> в <span class="pinkText">Instagram</span></li>
						<li>82% наших заказчиков становиться постоянными клиентами</li>
					</ul>
				</div>
				<div class="aboutFlexBlock2">
					<img src="images/iphoneAbout.png" alt="iphone">
				</div>
			</div>
		</div>
	</div>
	
	<div class="principle">
		<div class="container">
			<div class="principleFlex">
				<div class="principleBlock1">
					<ul class="principleList">
						<li class="principleListItemHeader book"><span class="sizeMarker">Наши принципы</span>Основа любого бизнеса <span class="mobileHidden">-</span> качественный продукт и сервис высокого уровня</li>
						<li class="principleListItemHeader globus"><span class="sizeMarker">Наша команда состоит из более чем 30 человек</span></li>
						<li><span class="blueTextLittle">Стратег</span> <span class="mobileHidden">-</span> составление общей концепции продвижения аккаунта</li>
						<li><span class="blueTextLittle">Контент менеджер</span> <span class="mobileHidden">-</span> план ведения аккаунта, визуальная часть фото и видео контент</li>
						<li><span class="blueTextLittle">Маркетолог</span> <span class="mobileHidden">-</span> разработка и реализация рекламных кампаний</li>
						<li><span class="blueTextLittle">Таргетолог</span> <span class="mobileHidden">-</span> настройка, запуск и оптимизация официальной рекламы в Instagramа</li>
						<li>Также сотрудники, которые ежедневно работают над продвижением и привлечение новых клиентов к Вашему аккаунту</li>
					</ul>
				</div>
				<div class="principleBlock2"></div>
			</div>
		</div>
	</div>
	
	<div class="aboutInformation">
		<div class="container">
			<div class="infoFlexWrapper">
				<div class="infoImg">
					<img src="images/lamp.png" alt="icon">
				</div>
				<div class="infoContent">Ежегодно мы посещаем десятки конференций и тренингов посвященных Instagram, общаемся с<br> топовыми спикеров в сфере построения бизнеса, марктеинга, рекламы, а также повышения<br> доверия и лояльности клиента.</div>
			</div>
			<div class="infoFlexWrapper">
				<div class="infoImg">
					<img src="images/handHeart.png" alt="icon">
				</div>
				<div class="infoContent"><span class="semiBold">Нам доверяют свой бизнес</span><br>
				Нашей основной целью и принципом является помощь в построении бизнеса в Instagram, а<br> также создания для их владельцев условий, в которых ведение бизнеса в Instagram станет<br> максимально легким и эффективным.</div>
			</div>
			<div class="infoFlexWrapper">
				<div class="infoImg">
					<img src="images/telephoneAsk.png" alt="icon">
				</div>
				<div class="infoContent">Мы стараемся предоставить качественную услугу, поэтому перед началом каждого продвижения<br> мы разрабатываем индивидуальную стратегию продвижения именно для Вашего бизнеса,<br> ставим цели и достигаем их.</div>
			</div>
			<div class="infoFlexWrapper">
				<div class="infoImg">
					<img src="images/medal.png" alt="icon">
				</div>
				<div class="infoContent"><span class="semiBold">Ответственность</span><br>
				Мы гарантируем качество и уровень наших услуг, на любой пакет продвижения действует<br> гарантия полного возврата оплаты в случае отсутствия положительных результатов.</div>
			</div>
		</div>
	</div>
@endsection