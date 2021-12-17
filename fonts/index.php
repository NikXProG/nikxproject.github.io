<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Химия</title>
    <link rel="stylesheet" type="text/css" href="/CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Mono+One&family=Bad+Script&family=Jura:wght@300&family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/Icons/Picture/icon.png">
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<style>
* {
   box-sizing: border-box;
}
.post-wrap {
   max-width: 1120px;
   margin: 0 auto;
   justify-content: center;
}
.post-item {
   padding: 15px;
   width:500px;
}
.post-item-wrap {
   background: #0c1013;
   position: relative;
}
.post-item-wrap:after {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: -1;
   background: #ffa12c;
   transform: rotate(1deg);
   transform-origin: left bottom;
   transition: .3s ease-in-out;
}
.post-item-wrap:hover:after {
   top: 5px;
   left: 5px;
   transform: rotate(2deg);
}
.post-link {
   text-decoration: none;
   display: block;
   padding: 30px;
   height:650px;
}
.post-title {
   color: #33261D;
   margin-bottom: 15px;
   transition: .3s ease-in-out;
}
.post-item-wrap:hover .post-title {
    color: #ffa12c;
}
.post-content {
   color: #A69888;
   font-size: 14px;
   font-family: 'Bad Script', cursive;
   font-weight: 700;
   line-height: 1.8;
}
@media (min-width: 768px) {
   .post-item {
      flex-basis: 50%;
      flex-shrink: 0;
   }
}
@media (min-width: 960px) {
   .post-item {
      flex-basis: 33.333333333%;
   }
}
@font-face {
	font-family : "TT_Skip-E 85W";
	src: url("/fonts/Genshin_impact.ttf") format(".ttf");
	font-style:normal;
	font-weight:normal;
}
#ggtitle,#undertitle{
  font-family: "TT_Skip-E 85W",cursive;
}
</style>
</head>
<body>
    <div class="wrapper">
        <?php
            include 'Sitedesign/Menu.php';
        ?>
        <div class="container">
        	<div style="margin-top: 2.5em;margin-left: auto;margin-right: auto;padding:25px;display: flex;width:80%;border-radius:1.5em;border:5px solid #ffa12c;background: #0c1013;">
				<div>
					<h1 id="ggtitle" style="margin:3px;font-size: 2.4em;">Добро пожаловать на сайт!</h1>
					<p  id ="undertitle" class="post-content" style="font-size: 25px;margin:0;">Справочник по химии</p>
				</div>
			</div>
        </div>
        <div class="container">
        	<div style="margin-left: auto;margin-right: auto;padding:25px;display: flex;">
				<div class="post-wrap">
					<div class="post-item">
						<div class="post-item-wrap">
							<a href="/HistoricalFigures/HumphryDavy/" class="post-link">
								<img src="/Icons/HistoricalFigures/Humphry Davy/img2.jpg" width="400">
								<h3 class="post-title">Сэр Гемфри Дэви</h3>
								<p class="post-content" style="font-family: 'Bad Script', cursive;">Британский химик, агрохимик, физик и геолог, изобретатель, один из основателей электрохимии. Известен открытием многих химических элементов, а также покровительством Фарадею на начальном этапе его научной деятельности. В 1799 году Дэви экспериментировал с закисью азота и был удивлен тем, как он заставил его смеяться, поэтому он прозвал его «веселящим газом» и написал о его потенциальных анестезирующих свойствах для облегчения боли во время операции.</p>
							</a>
						</div>
					</div>
					<div class="post-item">
						<div class="post-item-wrap">
							<a href="/Elements/Hg/" class="post-link">
		            			<img src="/Icons/Elements/metals/ten_row/Hg/Hg.jpg" width="400">
								<h3 class="post-title">Ртуть</h3>
								<p class="post-content">Химический элемент шестого периода периодической системы химических элементов Д. И. Менделеева с атомным номером 80, относящийся к подгруппе цинка, 12-й группе. Простое вещество ртуть — переходный металл, при комнатной температуре представляющий собой тяжёлую серебристо-белую жидкость, пары которой чрезвычайно ядовиты, контаминант. Ртуть — один из двух химических элементов , простые вещества которых при нормальных условиях находятся в жидком агрегатном состоянии.</p>
							</a>
						</div>
					</div>
				</div>
				<div class="post-wrap">
					<div class="post-item">
						<div class="post-item-wrap">
							<a href="/Elements/Br/" class="post-link">
								<img src="/Icons/Elements/Nonmetals/Br/Br.jpg" width="400">
								<h3 class="post-title">Бром</h3>
								<p class="post-content">Химический элемент с атомным номером 35 . Принадлежит к 17-й группе периодической таблицы Д.И.Менделеева, находится в четвёртом периоде таблицы. Атомная масса элемента 79,901 - 79,907 . Обозначается символом Br (от лат. Bromum). Химически активный неметалл, относится к группе галогенов. Простое вещество бром при нормальных условиях является тяжёлой едкой жидкостью красно-бурого цвета с сильным неприятным «тяжёлым» запахом, отдалённо напоминающим запах одновременно иода и хлора. Летуч, ядовит. Молекула брома двухатомна (формула Br<sub>2</sub> ).</p>
							</a>
						</div>
					</div>
					<div class="post-item">
						<div class="post-item-wrap">
							<a href="/HistoricalFigures/WilliamRamsay/" class="post-link">
		            			<img src="/Icons/HistoricalFigures/William Ramsay/img2.jpg" width="400">
								<h3 class="post-title">Уильям Рамзай</h3>
								<p class="post-content">Шотландский британский химик и физик, лауреат Нобелевской премии по химии 1904 года. Открыл неон, аргон, криптон, ксенон и показал, что они с гелием и радоном формируют отдельную группу новых элементов — инертные газы.Член Лондонского королевского общества (1888), иностранный член Парижской академии наук (1910; корреспондент с 1895), иностранный член-корреспондент (1901) и почётный член Петербургской академии наук.</p>
							</a>
						</div>
					</div>
				</div>
				<div class="post-wrap">
					<div class="post-item">
						<div class="post-item-wrap">
							<a href="/HistoricalFigures/Mendeleev/" class="post-link">
								<img src="/Icons/HistoricalFigures/Mendeleev/img.jpg" width="400">
								<h3 class="post-title">Дмитрий Иванович Менделеев</h3>
								<p class="post-content">Русский учёный-энциклопедист: химик, физикохимик, физик, экономист, геолог, нефтяник, педагог. Профессор Императорского Санкт-Петербургского университета; член-корреспондент (по разряду «физический») Императорской Санкт-Петербургской Академии наук. Среди самых известных открытий — периодический закон химических элементов, один из фундаментальных законов мироздания, неотъемлемый для всего естествознания. Автор классического труда «Основы химии».</p>
							</a>
						</div>
					</div>
					<div class="post-item">
						<div class="post-item-wrap">
							<a href="/Elements/Ar/" class="post-link">
		            			<img src="/Icons/Elements/In.gases/Ar/Ar.jpg" width="400">
								<h3 class="post-title">Аргон</h3>
								<p class="post-content">Химический элемент 18-й группы периодической таблицы Д.И.Менделеева, третьего периода, с атомным номером 18. Обозначается символом Ar (лат. Argon). Третий по распространённости химический элемент в воздухе земной атмосферы (после азота и кислорода) — 0,93 % по объёму. Простое вещество аргон — инертный одноатомный газ без цвета, вкуса и запаха.</p>
							</a>
						</div>
					</div>
				</div>
	        </div>
        </div>
	</div>
</body>
</html>