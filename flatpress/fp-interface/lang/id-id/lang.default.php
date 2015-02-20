<?php
/* 
# Diterjemahkan oleh eggoez - http://goez.my.id
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang = array();

	$lang['main'] = array(
		
		'nextpage'		=> 'Selanjutnya &raquo;',
		'prevpage'		=> '&laquo; Sebelumnya',
		'entry'      	=> 'Entri',
		'static'     	=> 'Halaman Statis',
		'comment'    	=> 'Komentar',
		'preview'    	=> 'Ubah/Lihat',
		
		'filed_under'	=> 'Tercantum',	
		
		'add_entry'  	=> 'Tambah Entri',
		'add_comment'  	=> 'Tambah komentar',
		'add_static'  	=> 'Tambah halaman statistik',
		
		'btn_edit'     	=> 'Ubah',
		'btn_delete'   	=> 'Hapus',
		
		'nocomments'	=> 'Tambahkan komentar',
		'comment'	=> '1 Komentar',
		'comments'	=> 'Komentar',
		
	);
	
	$lang['search'] = array(
		
		'head'	=> 'Cari',
		'fset1'	=> 'Masukkan kata pencarian',
		'keywords'	=> 'Kata kunci',
		'onlytitles'	=> 'Judul saja',
		'fulltext'	=> 'Semua kata',
		
		'fset2'	=> 'Tanggal',
		'datedescr'	=> 'Anda dapat menentukan pencarian Anda untuk tanggal tertentu. Anda juga dapat memilih satu tahun, satu tahun dan bulan, atau tanggal lengkap. '.
					'Biarkan saja kosong untuk mencari semua data.',
		
		'fset3' 	=> 'Cari dalam kategori',
		'catdescr'	=> 'Jangan memilih bila Anda ingin mencari semua data.',
		
		'fset4'	=> 'Mulai mencari',
		'submit'	=> 'Cari',
		
		'headres'	=> 'Hasil pencarian',
		'descrres'	=> 'Pencarian untuk <strong>%s</strong> memberikan hasil sebagai berikut',
		'descrnores'=> 'Pencarian untuk <strong>%s</strong> tidak ada hasil.',
		
		'moreopts'	=> 'Pilihan lainya',
		
		
		'searchag'	=> 'Cari ulang',
		
	);
	
	$lang['search']['error'] = array(
	
		'keywords'	=> 'Anda harus menentukan setidaknya 1 kata kunci'
	
	);
	
	
	
	
	
	$lang['entry'] = array();
	$lang['entry']['flags'] = array();
	
	$lang['entry']['flags']['long'] = array(
		'draft' => '<strong>Entri konsep</strong>: tersembunyi, menunggu publikasikan',
		//'static' => '<strong>Static entry</strong>: normally hidden, to reach the entry put ?page=title-of-the-entry in url (experimental)',
		'commslock' => '<strong>Komentar terkunci</strong>: komentar tidak dibolehkan untuk entri ini'
	);
	
	$lang['entry']['flags']['short'] = array(
		'draft' => 'Konsep',
		//'static' => 'Static',
		'commslock' => 'Komentar terkunci'
	);

	$lang['404error'] = array(
		'subject'	=> '404 Tidak ditemukan',
		'content'	=> '<p>Maaf, sistem tidak bisa menemukan halaman yang Anda minta.</p>'
	);
		
	// Login
	$lang['login'] = array(
		
		'head'		=> 'Masuk',
		'fieldset1'	=> 'Masukkan sebuah Nama pengguna dan kata sandi',
		'user'		=> 'Nama pengguna:',
		'pass'		=> 'Sandi:',
		'fieldset2'	=> 'Tidak bisa masuk',
		'submit'	=> 'Masuk',
		'forgot'	=> 'Kata sandi salah'
	);
		
	$lang['login']['success'] = array(
		'success'	=> 'Anda berhasil Masuk.',
		'logout'	=> 'Anda sudah keluar log, Sampai jumpa.. :)',
		'redirect'	=> 'Anda akan diarahkan dalam 5 detik.',
		'opt1'		=> 'Kembali ke indek',
		'opt2'		=> 'Menuju Panel',
		'opt3'		=> 'Buat entri baru'
	);
	
	$lang['login']['error'] = array(
		'user'		=> 'Anda harus masukan nama pengguna.',
		'pass'		=> 'Mohon masukkan sebuah kata sandi.',
		'match'		=> 'Kata sandi salah.'
	);
	
	
	$lang['comments'] = array(
		'head'		=> 'Tambah komentar',
		'descr'		=> 'Ikuti formulir ini untuk menambahkan komentar Anda',
		'fieldset1'	=> 'Data pengguna',
		'name'		=> 'Nama (*)',
		'email'		=> 'Email:',
		'www'		=> 'Website:',
		'cookie'	=> 'Ingat saya',
		'fieldset2'	=> 'Tambahkan komentar',
		'comment'	=> 'Komentar (*):',
		'fieldset3'	=> 'Kirim',
		'submit'	=> 'Tambah',
		'reset'		=> 'Bersihkan',
		'success'	=> 'Komentar Anda berhasil ditambahkan',
		'nocomments'	=> 'Entri ini tidak memiliki komentar',
		'commslock'	=> 'Komentar tidak di izinkan untuk entri ini',
	);
	
	$lang['comments']['error'] = array(
		'name'		=> 'Masukkan sebuah nama pengguna',
		'email'		=> 'Masukkan email yang benar',
		'www'		=> 'Masukan alamat URL yang benar',
		'comment'	=> 'Anda harus masukkan sebuah komentar',
	);
	
	$lang['date']['month'] = array(
		
		'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'Nopember',
		'Desember'
		
	);

	$lang['date']['month_abbr'] = array(
		
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Agust',
		'Sep',
		'Okt',
		'Nop',
		'Des'
		
	);

	$lang['date']['weekday'] = array(
		
		'Minggu',
		'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jum\'at',
		'Sabtu',
		
	);

	$lang['date']['weekday_abbr'] = array(
		
		'Ming',
		'Sen',
		'Sel',
		'Rab',
		'Kam',
		'Jum',
		'Sab',
		
	);



?>
