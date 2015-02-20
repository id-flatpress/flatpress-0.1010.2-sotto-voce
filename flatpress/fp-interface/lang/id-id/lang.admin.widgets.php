<?php
/* 
# Diterjemahkan oleh eggoez - http://goez.my.id
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['admin']['widgets']['submenu']['default'] = 'Kelola Widget';
	$lang['admin']['widgets']['submenu']['raw'] 	= 'Kelola Widget (raw)';

	/* default action */
	
	$lang['admin']['widgets']['default'] = array(
		'head'		=> 'Kelola Widget (<em>eksperimental</em>)',
		
		'descr'		=> 	'Sebuah <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:widgets" title="Apa itu Widget?">'.
						'Widget</a> adalah komponen dinamis yang dapat menampilkan data dan berinteraksi dengan pengguna.
						Sementara <strong>Tema</strong> dimaksudkan untuk mengubah seperti bagaimana blog Anda terlihat, Widget 
						<strong>memperpanjang</strong> terlihat dan tergantung fungsi.</p>

						<p>Widget dapat diseret ke daerah-daerah khusus tema Anda yang bisa disebut
						<strong>WidgetSet</strong>. Jumlah dan nama WidgetSet mungkin berbeda, karena tergantung dengan
						tema yang Anda pilih.</p>

						<p>FlatPress dilengkapi dengan beberapa Widget: ada Widget untuk navigasi membantu login, untuk
						menampilkan kotak pencarian, dll.</p>
						
						<p>Widget juga dikelola oleh sebuah <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="Apa itu Plugin?">plugin</a>.',
						
		'availwdgs'	=> 'Widget tersedia',
		'trashcan'	=> 'Tarik kesini untuk menghapus',
		
		'themewdgs' => 'WidgetSet untuk tema',
		'themewdgsdescr' => 'Widget yang tersedia untukTema yang Anda pilih:',
		'oldwdgs'	=> 'WidgetSet lainya',
		'oldwdgsdescr' =>'WidgetSet berikut tampaknya tidak menjadi milik salah satu'.
						'WidgetSet tercantum di atas. WidgetSet itu mungkin sisa dari tema yang lain.',
		
		'submit'	=> 'Simpan Perubahan',

	);
	
	$lang['admin']['widgets']['default']['stdsets'] = array(
		'top'		=> 'Bagian atas',
		'bottom'	=> 'Bagian bawah',
		'left'		=> 'Samping kiri',
		'right'		=> 'Samping kanan',
	);
	
	$lang['admin']['widgets']['default']['msgs'] = array(
		1	=> 'Perubahan berhasil disimpan',
		-1	=> 'Nampaknya ada kesalahan dalam menyimpan, silahkan Anda coba lagi.',
	);


	
	/* "raw" panel */	
	
	$lang['admin']['widgets']['raw'] = array(
		'head'		=> 'Kelola Widgets (<em>editor raw</em>)',
		'descr'		=> 'Sebuah <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="Apa itu Widget?">'.
						'Widget</a> adalah sebuah visualisasi elemen dari sebuah <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="Apa itu plugin?">'.
						'Plugin</a> Anda apat memasukkan didaerah khusus (the <em>Widgetset</em>) pada halaman blog Anda. </p>'.
						'<p>Ini adalah <strong>raw</strong> editor mentah, beberapa pengguna yang sudah faham '.
						'atau orang yang sudah mengenal JavaScript mungkin lebih suka ini.',
						
		'fset1'		=> 'Pengeditan',
		'fset2'		=> 'Ajukan perubahan',
		'submit'	=> 'Terapkan',

	);
	
	
	$lang['admin']['widgets']['raw']['msgs'] = array(
		1	=> 'Konfig sudah disimpan',
		-1	=> 'Nampaknya ada kesalahan dalam penyimpanan, Hal ini mungkin terjadi karena beberapa alasan: mungkin file Anda mengandung kesalahan sintak.',
	);

		

	/* system errors */
		
	$lang['admin']['widgets']['errors'] = array(
		'generic'	=> 'Tidak bisa memanggil Widget <strong>%s</strong> tidak ditemukan, dan akan dilewati. '.
 				'Apakah plugin ini tidak diaktifkan pada <a href="admin.php?p=plugin">plugin panel</a>?'

	);
	
?>
