<?php
/* 
# Diterjemahkan oleh eggoez - http://goez.my.id
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['admin']['config']['default'] = 
	array(
		'head'		=> 'Pengaturan',
		'descr'		=> 'Atur dan sesuaikan blog FlatPress
					instalasi.',
		'submit'		=> 'Simpan Perubahan',
		
		'sysfset'		=> 'Sistem Pengaturan Utama',
		'syswarning'	=> '<big>Peringatan!</big> Ini informasi sangat penting dan harus benar,
	atau FlatPress akan (mungkin) menolak untuk bekerja dengan baik.',
		'blog_root'		=> '<strong>jalan mutlak untuk flatpress</strong>. Catatan:
	umumnya Anda tidak perlu mengedit ini, tetap hati-hati, karena kita tidak dapat
	memeriksa apakah benar atau tidak.',
		'www'		=>'<strong>Blog root</strong>. URL untuk blog Anda, lengkap
	subdirektor. <br />
	misalnya.: http://www.mydomain.com/flatpress/ (trailing slash diperlukan)',
		
		// ------
		
		'gensetts'		=> 'Pengaturan utama',
		'blogtitle'		=> 'Judul',
		'blogsubtitle'		=> 'Uraian',
		'blogfooter'		=> 'Catatan kaki',
		'blogauthor'		=> 'Nama pengguna',
		'startpage'			=> 'Halaman awal akan membuka?',
		'stdstartpage'		=> 'Blogku (standar)',
		'blogurl'			=> 'Alamat URL',
		'blogemail'			=> 'Blog E-mail',
		'notifications'		=> 'Pemberitahuan',
		'mailnotify'		=> 'Aktifkan pemberitahuan email ketika ada komentar',
		'blogmaxentries'	=> 'Jumlah postingan awal halaman',
		'langchoice'		=> 'Pengaturan Bahasa',

		'intsetts'		=> 'Pengaturan waktu dan jam',
		'utctime'		=> '<acronym title="Universal Coordinated Time">UTC</acronym> pukul ',
		'timeoffset'		=> 'Perbedaan waktu',
		'hours'			=> 'jam',
		'timeformat'		=> 'Pilih standart pengaturan waktu',
		'dateformat'		=> 'Pilih standart pengaturan tanggal',
		'dateformatshort'	=> 'Standart format untuk tanggal (short)',
		'output'		=> 'Hasil',
		'charset'		=> 'Atur karakter',
		'charsettip'	=> 'Karakter menulis pada blog Anda adalah (UTF-8  '.
						'<a href="http://wiki.flatpress.org/doc:charsets">sesuaikan</a>)'
		);
		
	$lang['admin']['config']['default']['msgs'] = 
	array(
		1		=> 'Pengaturan baru sudah disimpan.',
		-1		=> 'Nampaknya ada yang salah dalam penyimpanan pengaturan, mohon diperiksa.',
		
		);
			
	$lang['admin']['config']['default']['error'] = 
	array(
		'www' 		=>	'Alamat blog harus benar',
		'title'		=>	'Masukkan judul dengan benar',
		'email'		=>	'Alamat email Anda harus benar',
		'maxentries'=>	'Anda tidak memasukkan nomor yang benar dalam catatan',
		'timeoffset'=>	'Anda tidak memasukkan waktu dengan benar!'.
						'Anda bisa atur format (contoh. 2h30" => 2.5)',
		'timeformat'=>	'Anda harus memasukkan waktu dengan benar',
		'dateformat'=>	'Anda harus memasukkan format tanggal dengan benar',
		'dateformatshort'=>	'Anda harus tentukan format pada tanggal (short)',
		'charset'	=>	'Anda harus memasukkan karakter id Anda',
		'lang'		=>	'Bahasa yang Anda pilih tidak tersedia'
		);		
			
		
?>
