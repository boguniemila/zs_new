<?php 
	$najczesciej_wyszukiwane = $this->requestAction(array('controller' => 'SearchKeywords',
									'action' => 'najczesciej'));
							?>		
<div class="qlist qlist-red">
	<div class="header">NAJCZĘŚCIEJ WYSZUKIWANE</div>
	<div class="cont">
		<?php foreach ($najczesciej_wyszukiwane as $fit):?>
		<p{cycle values=', class="sec"'}><a href="/najczesciej_szukane/<?php echo Inflector::slug($fit['SearchKeyword']['keyword'],'-').'-'.  $fit['SearchKeyword']['id'];?>.html"><?php echo $fit['SearchKeyword']['keyword'];?></a></p><?php endforeach;?>
	</div>
</div>
<?php 
	$ostatnio_odwiedzane = $this->requestAction(array('controller' => 'SearchKeywords',
									'action' => 'ostatnio'));
							?>		
<?php if (count($ostatnio_odwiedzane) > 0):?><div class="qlist qlist-blue">
	<div class="header">OSTATNIO ODWIEDZANE</div>
	<div class="cont">
		<?php foreach($ostatnio_odwiedzane as $fit):?>
		<p{cycle values=', class="sec"'}><a href="{$fit.url}"></a><?php echo $fit['name'];?></a></p><?php endforeach;?>
	</div>
</div><?php endif;?>
<!-- {if $act!=='wyszukiwarka'}<div id="znajdz-uczelnie-mini"><div><form method="get" action="/wyszukiwarka/szukaj-4.html">
	<input type="hidden" name="s[wojewodztwo]"/>
	<div><input type="text" name="s[slowo]"/></div>
	<div><input type="text" name="st[wojewodztwo]"/></div>
	<div><input type="text" name="s[miasto]"/></div>
	<div><input type="submit" value=" "/></div>
</form></div></div>{/if} -->
</br>
<div><iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fzostanstudentem&amp;width=300&amp;height=480&amp;colorscheme=light&amp;show_faces=true&amp;border_color=white&amp;stream=true&amp;header=false&amp;appId=290331384356620" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:480px;" allowTransparency="true"></iframe></div>
</br>
{*<div class="register-box"><form method="post" action="/rejestracja.html"><input type="hidden" name="nosubmit" value="1"/>
	<span>ZAREJESTRUJ SIĘ</span>
	<input type="text" name="login"/>
	<input type="submit" value=" "/>
</form></div>*}