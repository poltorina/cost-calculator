<?php
/*
Template Name: Калькулятор
*/
?>
<?php get_header(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/calc.js"></script>
        <div class="content">
            <ul class="breadcrumb">
               <?php the_breadcrumb(); ?>
            </ul>

			<div class="calc-bg">
				<p>Рaсстояние прохода, см:</p>
				<ul class="tabs">
					<li class="one active">
						<p>90</p>
					</li>
					<li class="two">
						<p>120</p>
					</li>
					<li class="three">
						<p>160</p>
					</li>
					<li class="four">
						<p>220</p>
					</li>
				</ul>
				<div id="border-grey">
					<div class="tabs-panel">
						<div id="one" class="info-panel">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<h1 id="mono-system">АМ  MONO  СИСТЕМА</h1>
							<p>Система на 90см состоит из<br>одной стойки с внешним блоком питания</p>
						</div>
						<div id="two" class="info-panel">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<h1 id="mono-system">АМ  СИСТЕМА  DUAL  STANDART</h1>
							<p>Система на 120см состоит из<br>двух стоек с внешним блоком питания</p>
						</div>
						<div id="three" class="info-panel">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<h1 id="mono-system">АМ  СИСТЕМА  DUAL  MAXI</h1>
							<p>Система на 160см состоит из<br>двух стоек с внешним блоком питания</p>
						</div>
						<div id="four" class="info-panel">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<img src="http://goodwill.local/wp-content/uploads/2016/06/prod1.png" alt="">
							<h1 id="mono-system">АМ  СИСТЕМА  SPLIT</h1>
							<p>Система на 220см состоит из<br>вух стоек с внешним блоком питания</p>
						</div>
						<div class="sop-tov">
							<form method="post" action="" id="form">
								<div class="radio-hidden">
									<input type="radio" name="radio[]" value="АМ  MONO  СИСТЕМА (90см)"  id="radio1" checked="checked">
									<input type="radio" name="radio[]" value="АМ  СИСТЕМА  DUAL  STANDART (120см)" id="radio2">
									<input type="radio" name="radio[]" value="АМ  СИСТЕМА  DUAL  MAXI (160см)" id="radio3">
									<input type="radio" name="radio[]" value="АМ  СИСТЕМА  SPLIT (220см)" id="radio4">
								</div>
								<p>Сопутствующие товары</p>
								<hr>
								<div class="radiobox">
									<ul class="radio-ul">
										<li><input type="checkbox" name="check[]" value="Контактный деактиватор" data-foo-bar="200" id="kont"><label for="kont">Контактный деактиватор</label></li>
										<li><input type="checkbox" name="check[]" value="Безконтактный деактиватор" data-foo-bar="300" id="bezkont"><label for="bezkont">Безконтактный деактиватор</label></li>
										<li><input type="checkbox" name="check[]" value="Датчик прохода" data-foo-bar="100" id="prohoda"><label for="prohoda">Датчик прохода</label></li>
									</ul>
								</div>
								<ul class="input-ul">
									<li><input type="checkbox" name="check[]" value="AM этикетки (1000шт)" data-foo-bar="110" id="etiket"><label for="etiket">AM этикетки (1000шт)</label></li>
									<li><input type="checkbox" name="check[]" value="AM датчик mini-pancil Гвоздик (50шт)" data-foo-bar="120" id="gvozd"><label for="gvozd">AM датчик mini-pancil Гвоздик (50шт)</label></li>
									<li><input type="checkbox" name="check[]" value="Съемник датчиков" data-foo-bar="130" id="semnik"><label for="semnik">Съемник датчиков</label></li>
									<li><input type="checkbox" name="check[]" value="AM датчик бутылочный (label)" data-foo-bar="140" id="butil"><label for="butil">AM датчик бутылочный (label)</label></li>
									<li><input type="checkbox" name="check[]" value="AM датчик mini-pancil Тросик (50шт)" data-foo-bar="150" id="trost"><label for="trost">AM датчик mini-pancil Тросик (50шт)</label></li>
								</ul>
								<hr>
								<div id="modal_form">
									<span id="modal_close">X</span>
									<div class="modal-input"> 
										<ul class="modal-ul">
											<li><label for="name">Ваше имя:</label><input type="text" name="name" id="name" required="required"/></li>
		    								<li><label for="email">Ваш email:</label><input type= "text" name= "email" id="email" required="required"></li>
		    								<li><label for="phone">Ваш номер:</label><input type="text" name="phone" id="phone" required="required"/></li>
		    								<li><input type="submit" id="trostq"><label for="trostq" class="button alt"><p>Оформить заказ с бесплатной доставкой</p></label></li>
		    							</ul>
    								</div>
								</div>
								<div id="modal_info">
									<span id="info_close"><p>X</p></span>
									<p>Спасибо, мы приняли Ваш заказ!</p>
								</div>
								<div id="overlay"></div>
							</form>
						</div>
					</div>
					<div class="tab-price woocommerce">
						<span id="price-name">ЦЕНА:</span>
						<p class="price">
							<span class="amount"><span class="rure">1000</span> грн.</span>
						</p>
						<button type="submit" class="button alt">
							<p>Оформить заказ с бесплатной доставкой</p>
						</button>
					</div>
				</div>
			</div>
        </div>


<?php get_footer(); ?>