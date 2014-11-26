<div id="uczelnia" class="container">
	<div id="content">
		<section class="animated fadeInUp notransitioncont main">
			<?php if ($university['logo']): ?>
				<div class="ml">
					<img itemprop="logo" src="/img/uczelnie_min/<?php echo $university['logo'];?>" alt="Logo uczelni <?php echo $university['University']['nazwa'];?>"/></div><?php endif; ?>
			<div class="mr<?php if (!($university['logo'])): ?> mr-noimage <?php endif; ?>">
				<h1 itemprop="legalname"><?php echo $university['University']['nazwa'];?></h1>
				<div class="mbrl">
					<a href="http://<?php echo $university['UniversitiesParameter']['www'];?>" itemprop="url" class="url" target="_blank"><?php echo $university['UniversitiesParameter']['www'];?></a>
					<address itemprop="address">
						<?php echo $university['UniversitiesParameter']['adres'];?>
						<?php if($university['UniversitiesParameter']['telefon']):?><br/>tel: <?php echo $university['UniversitiesParameter']['telefon']; endif; ?>
						<?php if($university['UniversitiesParameter']['email']):?><br/>e-mail: <?php echo $university['UniversitiesParameter']['email']; endif; ?>
					</address>
				</div>
				<div class="mbr">
					<?php if ($university['University']['abonament'] < 2):?>
						<a href="/info/kontakt-1.html" class="uzupelnij-profil"></a>
					<?php else : ?>
						<span rel="{$uczelnia.id}" class="uczelnia-schowek"></span>
					<?php endif;?>
					<?php if ($university['University']['link_rejestracji']): ?><a href="<?php echo $university['University']['link_rejestracji']; ?>" class="uczelnia-rekrutuj" target="_blank"></a><?php endif;?>
					<?php if($university['UniversitiesParameter']['fb'] || $university['UniversitiesParameter']['gplus'] || $university['UniversitiesParameter']['yt']):?>
						<ul class="social">
							<?php if($university['UniversitiesParameter']['fb']):?>
								<li><a href="<?php echo $university['UniversitiesParameter']['fb'];?>" class="fb" target="_blank"></a></li>
							<?php endif;?>
							<?php if($university['UniversitiesParameter']['gplus']):?>
								<li><a href="<?php echo $university['UniversitiesParameter']['gplus'];?>" class="gp" id="plusone" target="_blank"></a></li>
							<?php endif;?>
							<?php if($university['UniversitiesParameter']['yt']):?>
								<li><a href="<?php echo $university['UniversitiesParameter']['yt'];?>" class="yt" target="_blank"></a></li>
							<?php endif;?>
							<?php if($university['UniversitiesParameter']['twitter']):?>
								<li><a href="<?php echo $university['UniversitiesParameter']['twitter'];?>" class="twitter" target="_blank"></a></li>
							<?php endif;?>
						</ul>
					<?php endif;?>
				</div>
			</div>
			<div class="clearfix"></div>
		</section>
		<div class="">
			<!--Begin Tabs 1-->
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="<?php if ($zakladka_page === 0) : ?>resp-tab-active<?php endif;?>">
						<a href="<?php echo $university['url'];?>"><?php if($university['University']['university_type_id'] == 1):?>O UCZELNI<?php else : ?>O SZKOLE<?php endif;?></a>
					</li>
					<li class="<?php if ($zakladka_page === 5): ?>resp-tab-active<?php endif;?>">
						<a href="<?php echo $university['url'];?>/KIERUNKI-5">KIERUNKI</a>
					</li>
					<?php if($university['UniversitiesParameter']['zakladka1']):?>
						<li class="<?php if ($zakladka_page === 1): ?>resp-tab-active<?php endif;?>">
							<a href="<?php echo $university['zakladka1url'];?>"><?php echo $university['UniversitiesParameter']['nzakladki1'];?></a>
						</li>
					<?php endif;?>
					<?php if($university['UniversitiesParameter']['zakladka2']):?>
						<li class="<?php if ($zakladka_page === 2): ?>resp-tab-active<?php endif;?>">
							<a href="<?php echo $university['zakladka2url'];?>"><?php echo $university['UniversitiesParameter']['nzakladki2'];?></a>
						</li>
					<?php endif;?>
					<?php if($university['UniversitiesParameter']['zakladka3']):?>
						<li class="<?php if ($zakladka_page === 3): ?>resp-tab-active<?php endif;?>">
							<a href="<?php echo $university['zakladka3url'];?>"><?php echo $university['UniversitiesParameter']['nzakladki3'];?></a>
						</li>
					<?php endif;?>
					<?php if($university['UniversitiesParameter']['zakladka4']):?>
						<li class="<?php if ($zakladka_page === 4) : ?>resp-tab-active<?php endif;?>">
							<a href="<?php echo $university['zakladka4url'];?>"><?php echo $university['UniversitiesParameter']['nzakladki4'];?></a>
						</li>
					<?php endif;?>
				</ul>
				<div class="resp-tabs-container cont">
					<?php if ($zakladka_page === 0) : ?>
						<div>
							<!-- GALERIA -->
							<div class="row galeria">
							<?php if ($university['University']['abonament'] > 2):?>
								<?php if (count($university['galeria'])>0) :?>
								<div class="col-md-12">
									<div class="list_carousel text-center">
										<div class="carousel_nav">
											<a class="prev" id="car_prev" href="#"><span>prev</span></a>
											<a class="next" id="car_next" href="#"><span>next</span></a>
										</div>
										<div class="clearfix"></div>
										<ul id="carousel-projects">
											<!--featured-projects 1-->
											<?php foreach ($university['galeria'] as $image) : ?>
											<li>
												<div class="boxcontainer">
													<img src="/uploads/min/<?php echo $image;?>" alt="" />
													<div class="roll">
														<div class="wrapcaption">
															<a data-gal="prettyPhoto[gallery1]" href="/uploads/min/<?php echo $image;?>"><i class="icon-zoom-in captionicons"></i></a>
														</div>
													</div>
												</div>
											</li>
											<?php endforeach;?>
										</ul>
									</div>
								</div>
								<?php endif;?>
							<?php endif;?>
							</div>
							<?php if (strlen($university['UniversitiesParameter']['opis']) > 0):?>
								<section >
									<div class="row">
										<div class="col-md-12 animated fadeInLeft notransition">
											<h1 class="smalltitle">
											<span>Opis <?php if ($university['University']['university_type_id'] == 1):?>uczelni<?php else:?>szkoły<?php endif;?></span>
											</h1>
											<div class="info"><?php echo $university['UniversitiesParameter']['opis'];?>
												<?php if ($university['University']['abonament'] < 2 && $university['University']['university_type_id'] == 1):?>. Kierunki studiów. Studia dzienne (stacjonarne) i zaoczne (niestacjonarne), licencjackie, inżynierskie, magisterskie. Jakie studia wybrać? Czy warto tu studiować twój wymarzony kierunek. <?php endif;?>
												<?php if ($university['University']['abonament'] < 2 && $university['University']['university_type_id'] == 2):?>. Szkoła policealna - kursy roczne i dwuletnie po których jest pewna praca.<?php endif;?>
												<?php if ($university['University']['abonament'] < 2 && $university['University']['university_type_id'] == 3):?>. Szkoła językowa - angielski, niemiecki, rosyjski, hiszpański, japoński<?php endif;?>
											</div>
										</div>
									</div>
								</section>
							<?php endif;?>
							{if $lokalizacja_poparawna}
								<div class="row">
									<div class="col-md-12 animated fadeInLeft notransition">
										<h1 class="smalltitle">
										<span>Lokalizacja</span>
										</h1>
								<div class="bok">
									
									<div class="info" id="gogmap"></div>
								</div>
								</div>
								</div>
							{/if}
						</div>
					<!-- KIERUNKI -->
					<?php elseif ($zakladka_page === 5) :?>
						<?php if($university['University']['university_type_id'] == 3): ?>
							<div class="cont lista_jezykow">
								<h2>Języki</h2>
								<div class="info">
									<ul>
									<?php foreach ($kierunki as $uk): ?>
										<li><?php echo $uk['nazwa']?></li>{cycle values=',,<div class="cl"></div>'}
									<?php endforeach;?>
									</ul></div>
								<div class="cl"></div>
							</div>
						<?php endif;?>
						<?php if ($university['University']['abonament'] < 2 and $university['University']['university_type_id'] != 3) :?>
							<div class="cont lista_kierunkow">
								<div class="head">Kierunki</div>
								<div class="info">
									{foreach from=$uczelnia.kierunki_full item=uk key=ukk name=uk}
										{foreach from=$uk item=uk2 key=ukk2}<a href="{$uczelnia.kierunki[$ukk][$ukk2].url}">{$uczelnia.kierunki[$ukk][$ukk2].nazwa}</a>{if !$smarty.foreach.uk2.last} | {/if}{/foreach}{/foreach}
								</div>
								<div class="cl"></div>
							</div>
						<?php else: ?>
							<?php if (count($kierunki_full) > 0): if($university['University']['university_type_id'] != 3):?>
							<div class="lista_kierunkow" id="kierunki">
								<div class="head">Kierunki</div>
								<div class="info">
									<table class="kierunki-full">
									<tr><th rowspan="2" class="tal">Kierunek</th>
										<?php if (in_array('11',$kierunki_types) || in_array('21',$kierunki_types) || in_array('31',$kierunki_types) || in_array('41',$kierunki_types) || in_array('71',$kierunki_types)):?>
											<th colspan="<?php echo in_array('11',$kierunki_types) + in_array('21',$kierunki_types) + in_array('31',$kierunki_types) + in_array('41',$kierunki_types) + in_array('71',$kierunki_types); ?>">Stacjonarne</th><?php endif;?>
										<?php if(in_array('12',$kierunki_types) || in_array('22',$kierunki_types) || in_array('32',$kierunki_types) || in_array('42',$kierunki_types) || in_array('72',$kierunki_types)):?>
											<th colspan="<?php echo in_array('12',$kierunki_types) + in_array('22',$kierunki_types) + in_array('32',$kierunki_types) + in_array('42',$kierunki_types) + in_array('72',$kierunki_types);?>">Niestacjonarne</th><?php endif;?>
										<?php if(in_array('60',$kierunki_types) || in_array('62',$kierunki_types) || in_array('61',$kierunki_types)):?>
											<th colspan="<?php echo in_array('60',$kierunki_types) + in_array('61',$kierunki_types) + in_array('62',$kierunki_types);?>" >Szkoła 2&#8209;letnia</th><?php endif;?>
										<?php if(in_array('50',$kierunki_types) || in_array('52',$kierunki_types) || in_array('51',$kierunki_types)):?>
											<th colspan="<?php echo in_array('50',$kierunki_types) + in_array('51',$kierunki_types) + in_array('52',$kierunki_types);?>" >Szkoła 1&#8209;roczna</th><?php endif;?>
										<?php if(in_array('70',$kierunki_types)):?>
											<th colspan="<?php echo in_array('70',$kierunki_types);?>" rowspan="2">j.m.</th>
										<?php endif;?>
									</tr>
									<tr>
										<?php if (in_array('11',$kierunki_types)):?><th>I st. lic</th><?php endif;?>
										<?php if (in_array('21',$kierunki_types)):?><th>I st. inż</th><?php endif;?>
										<?php if (in_array('31',$kierunki_types)):?><th>II st.</th><?php endif;?>
										<?php if (in_array('71',$kierunki_types)):?><th>j.m.</th><?php endif;?>
										<?php if (in_array('12',$kierunki_types)):?><th>I st. lic</th><?php endif;?>
										<?php if (in_array('22',$kierunki_types)):?><th>I st. inż</th><?php endif;?>
										<?php if (in_array('32',$kierunki_types)):?><th>II st.</th><?php endif;?>
										<?php if (in_array('72',$kierunki_types)):?><th>j.m.</th><?php endif;?>
										<?php if (in_array('61',$kierunki_types)):?><th>st</th><?php endif;?>
										<?php if (in_array('62',$kierunki_types)):?><th>niest</th><?php endif;?>
										<?php if (in_array('51',$kierunki_types)):?><th>st</th><?php endif;?>
										<?php if (in_array('52',$kierunki_types)):?><th>niest</th><?php endif;?>

									</tr><?php $w2=0;?>
									<?php foreach ($kierunki_full as $ukk => $uk):?>
										<?php foreach ($uk as $ukk2 => $uk2): ?>
										<?php if (isset($kierunki_full[$ukk][$ukk2]['wydzialnazwa'])): $w1=$kierunki_full[$ukk][$ukk2]['wydzialnazwa'];?>
											<?php if ($w1!==$w2):?>
												<tr><td id="wydzial" colspan="<?php echo in_array('11',$uczelnia.kierunki_types) + in_array('21',$uczelnia.kierunki_types) + in_array('31',$uczelnia.kierunki_types) + in_array('41',$uczelnia.kierunki_types) + in_array('71',$uczelnia.kierunki_types) + in_array('12',$uczelnia.kierunki_types) + in_array('22',$uczelnia.kierunki_types) + in_array('32',$uczelnia.kierunki_types) + in_array('42',$uczelnia.kierunki_types) + in_array('72',$uczelnia.kierunki_types) + in_array('60',$uczelnia.kierunki_types) + in_array('61',$uczelnia.kierunki_types) + in_array('62',$uczelnia.kierunki_types) + in_array('50',$uczelnia.kierunki_types) + in_array('51',$uczelnia.kierunki_types) + in_array('52',$uczelnia.kierunki_types) + in_array('70',$uczelnia.kierunki_types) + 1?>">
												<?php $kierunki_full[$ukk][$ukk2]['wydzialnazwa'];?></td></tr>
												{$w2=$uczelnia.kierunki[$ukk][$ukk2].wydzialnazwa}
											<?php endif;?>
										<?php endif;?>
									<tr>
										<td class="tal"><a href="/kierunek/<?php echo Inflector::slug($kierunki_full[$ukk][$ukk2]['nazwa'],'-').'-'. $ukk2;?>"><?php echo $kierunki_full[$ukk][$ukk2]['nazwa'];?></a></td>
										<?php foreach ($kierunki_types as $value):?><td><?php if (isset($uk2[$value])):?>•<?php endif;?></td><?php endforeach;?>
									</tr><?php endforeach;?><?php endforeach;?>
								</table>
								</div>
								<div class="cl"></div>
							</div>
							<?php endif;?><?php endif;?>
						<?php endif;?>
					<?php elseif ($zakladka_page === 1) : if ($university['UniversitiesParameter']['zakladka1']) :?>
						<div class="cont-c zakladka" style="display:block"><?php echo $university['UniversitiesParameter']['zakladka1'];?></div>
					<?php endif;?>
					<?php elseif ($zakladka_page === 2) : if ($university['UniversitiesParameter']['zakladka2']) :?>
						<div class="cont-c zakladka" style="display:block"><?php echo $university['UniversitiesParameter']['zakladka2'];?></div><?php endif;?>
					<?php elseif ($zakladka_page === 3) : if ($university['UniversitiesParameter']['zakladka3']) :?>
						<div class="cont-c zakladka" style="display:block"><?php echo $university['UniversitiesParameter']['zakladka3'];?></div>
					<?php endif;?>
					<?php elseif ($zakladka_page === 4) : if ($university['UniversitiesParameter']['zakladka4']) :?>
						<div class="cont-c zakladka" style="display:block"><?php echo $university['UniversitiesParameter']['zakladka4'];?></div>
					<?php endif;?>
					<?php endif;?>
				</div>
			</div>
			<!--End Tabs 1-->
		</div>
	</div>
</div>