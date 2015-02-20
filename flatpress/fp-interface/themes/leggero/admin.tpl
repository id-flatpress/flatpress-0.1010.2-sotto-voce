{include file=cpheader.tpl}

		<div id="cpmain">
			

		<div class="entry">
		
		<ul id="admin-small-nav">
			<li><a href="{$smarty.const.BLOG_BASEURL}">Beranda</a></li>
			<li><a href="{$smarty.const.BLOG_BASEURL}login.php?do=logout">Keluar</a></li>
		</ul>
		
		{page}
				<h1 class="title">{$subject}</h1>
				<div class="body">{controlpanel}</div>
		{/page}
		</div>
		
		</div>
	
<div id="footer">
			{action hook=wp_footer}
			
			<!--
			
				Even though your not required to do this, we'd appreciate
				a lot if you didn't remove the notice above.
				
				This way we'll get a better ranking on search engines
				and you'll spread the FlatPress word all around the world :)
				
				If you really want to remove it, you may want to
				consider doing at least a small donation.  
			
			-->
			
			<p>
			Anda menggunakan <a href="http://www.flatpress.org/">FlatPress</a> <span ttitle="ID FlatPress Blog"> Bahasa</span> <a href="http://wiki.flatpress.org/res:language" title="Bahasa Indonesia">Indonesia</a>. Diterjemahkan oleh <a href="http://goez.my.id" title="g0eZ egGo" target="_blank">eggoez</a>.
			</p>
		</div> <!-- end of #footer -->

	</div>
</body>
</html>



