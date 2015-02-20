<?php
/* 
# Diterjemahkan oleh eggoez - http://goez.my.id
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['admin']['plugin']['submenu'] = array (
		'default'		=> 'Kelola Plugins'
	);
	
	/* main plugin panel */

	$lang['admin']['plugin']['default'] = array(
	
		'head'		=> 'Kelola Plugin(s)',
		'enable'	=> 'Aktifkan',
		'disable'	=> 'Matikan',
		'descr'		=> '<a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="Apa itu plugin?">'.
						'Plugin</a> adalah sebuah komponen untuk membuat FlatPress Anda lebih Baik.</p>'.
						'<p>Anda bisa memasang dengan cara meng-unggah pada folder <code>fp-plugins/</code> '.
						'.</p>'.
						'<p>Anda bisa mengaktifkan dan mematikan plugin pada panel ini',
		'name'		=> 'Nama',
		'description'=>'Keterangan',
		'author'	=> 'Pembuat',
		'version'	=> 'Versi',
		'action'	=> 'Aksi',
	);
	
	$lang['admin']['plugin']['default']['msgs'] = array(
		1	=> 'Perubahan berhasil disimpan',
		-1	=> 'Nampaknya ada kesalahan ketika menyimpan konfigurasi. Ini mungkin sebuah alasanya: mungkin file tidak lengkap atau ada direktori yang salah.',
	);
	
	/* system errors */
	
	$lang['admin']['plugin']['errors'] = array(
		'head'		=> 'Sedang memeriksa plugins:',
		'notfound'	=> 'Plugin tidak ditemukan. Lewati.',
		'generic'	=> 'Kesalahan kode %d',
	);
	
?>
