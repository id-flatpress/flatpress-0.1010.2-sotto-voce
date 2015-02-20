<?php
/* 
# Diterjemahkan oleh eggoez - http://goez.my.id
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/	
	$lang['admin']['panel']['maintain'] = 'Pemeliharaan';

	$lang['admin']['maintain']['default'] = array(
		'head'		=> 'Pemeliharaan',
		'descr'		=> 'Disini mungkin Anda akan menemukan informasi tentang kekacauan dalam FlatPress Anda, '.
					'Dan Mungkin Anda bisa menemukan solusi disini.
					Namun mungkin ini juga tidak bekerja.',
		'opt0'		=> '&laquo; Kembali',
		'opt1'		=> 'Kembalikan (Restart index)',
		'opt2'		=> 'Purge tema dan cache template',
		'opt3'		=> 'Kembalikan awal file permissions',
		'opt4'		=> 'Lihat informasi tentang PHP Anda',
		'opt5'		=> 'Periksa pembaruan',

		'chmod_info'	=> "Pemeriksa sebuah izin file <strong>tidak bisa</strong>
					dikembalikan menjadi 0777; kemungkinan pemilik file tidak sama dengan pemilik
					webserver. Biasanya Anda bisa abaikan pemberitahuan ini.",
		
	);
	
	$lang['admin']['maintain']['default']['msgs'] = array(
		1		=> 'Ekploitasi Lengkap dan selesai'
	);
	
	$lang['admin']['maintain']['updates'] = array(
		'head'	=> 'Pembaruan',
		'list'	=> '<ul>
		<li>Anda memakai FlatPress versi <big>%s</big></li>
		<li>Versi terahir FlatPress adalah <big><a href="%s">%s</a></big></li>
		<li>Versi stabil terahir untuk FlatPress adalah <big><a href="%s">%s</a></big></li>
		</ul>',
		'notice'=>'Pemberitahuan:'
		
	);
	
	
	
	$lang['admin']['maintain']['updates']['msgs'] = array(
		1		=> 'Nampaknya belum ada pembaruan!',
		2		=> 'Nampaknya FlatPress yang Anda pakai adalah versi terbaru',
		-1		=> 'Maaf, sistem tidak bisa menerima informasi'
	);

?>
