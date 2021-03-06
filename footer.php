<?php
/*
Template Name: フッター
*/
?>

<footer id="footer" class="site-footer">
	<div class="footer_inner">
	<div class="footer_left">
		<nav>
			<ul>
				<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
				<li><a href="<?php echo home_url(); ?>/info">お知らせ</a></li>
				<li><a href="<?php echo home_url(); ?>/blog_archive">ブログ</a></li>
				<li><a href="<?php echo home_url(); ?>/course_price">コース・料金</a></li>
			</ul>
		</nav>
	</div>
	<div class="footer_right">
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt="フッターロゴ">
		<div class="tel_wrap">
		<svg xmlns="http://www.w3.org/2000/svg" width="10" height="14.714"><path data-name="パス 29" d="M1.638 9.316c2.726 5.2 5.788 5.731 6.678 5.264l.232-.122-2.085-3.975-.233.12c-.718.377-1.435-.711-2.353-2.462s-1.406-2.959-.689-3.336l.232-.123L1.335.708 1.103.83c-.891.467-2.191 3.291.535 8.486zm8.171 4.481c.344-.18.155-.576-.041-.949l-1.4-2.67c-.151-.287-.4-.449-.6-.343-.126.066-.421.206-.8.394l2.081 3.967zM4.695 3.979c.2-.105.209-.4.059-.69s-1.4-2.67-1.4-2.67c-.2-.373-.413-.753-.758-.572l-.761.4 2.081 3.967c.37-.206.652-.369.779-.435z" fill="#fff"/></svg>
			<p class="tel_num">0123-456-7890</p>
			<p class="time">平日08:00〜20:00</p>
		</div>
	</div>
	</div>
	<div class="footer_bottom">
		<p>© 2020 Engress. </p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?> 
</body>

</html>