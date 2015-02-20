<?php
/* 
# Diterjemahkan oleh eggoez - http://goez.my.id
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/
	$lang['admin']['static']['submenu'] = array(
		'list'		=> 'Kelola statis',
		'write'		=> 'Buat statis'
	);

	
	/* main panel */
		
	$lang['admin']['static']['list'] = array(
	
		'head'		=> 'Halaman statis',
		'descr'		=> 'Silahkan pilih sebuah halaman untuk dirubah atau <a href="admin.php?p=static&amp;action=write">buat baru</a>.',
	
		'sel'		=> 'Sel', // checkbox
		'date'		=> 'Tanggal',
		'name'		=> 'Halaman',
		'title'		=> 'Judul',
		'author'	=> 'Penulis',
		
		'action'	=> 'Aksi',
		'act_view'	=> 'Lihat',
		'act_del'	=> 'Hapus',
		'act_edit'	=> 'Ubah'		
	);
	
	$lang['admin']['static']['list']['msgs'] = array(
		1	=> 'Halaman berhasil disimpan',
		-1	=> 'Nampaknya ada kesalahan dalam menyimpan
					sebuah halaman',
		2	=> 'Halaman berhasil dihapus',
		-2	=>	 'Nampaknya ada kesalahan dalam penghapusan, Silahkan ulangi menghapus
					sebuah halaman',
	);

	/* write panel */

	$lang['admin']['static']['write'] = 
	array(
		'head'		=> 'Publikasikan halaman',
		'descr'		=> 'Ubah daftar untuk publikasikan sebuah halaman',
		'fieldset1'	=> 'Ubah',
		'subject'	=> 'Subjek (*):',
		'content'	=> 'Konten (*):',
		'fieldset2'	=> 'Ajukan',
		'pagename'	=> 'Nama halaman (*):',
		'submit'	=> 'Publikasikan',
		'preview'	=> 'Lihat',

		'delfset'	=> 'Hapus',
		'deletemsg'	=> 'Hapus halaman ini',
		'del'		=> 'Hapus',
		'success'	=> 'Halaman berhasil diterbitkan',
		'otheropts'	=> 'Pilihan lainya',
	);
	
	$lang['admin']['static']['write']['error'] = array(
		'subject'	=> 'Anda tidak bisa menerbitkan dengan Subjek kosong',
		'content'	=> 'Anda tidak bisa menerbitkan dengan konten kosong',
		'id'		=> 'Anda harus memasukkan ID yang benar'
	);
	
	
	/* delete action */	
	$lang['admin']['static']['delete'] = array(
		'head'		=> "Hapus halaman", 
		'descr'		=> 'Kelola semua halaman anda:',
		'preview'	=> 'Lihat',
		'confirm'	=> 'Yakin untuk menghapus? Ini tidak bisa dikembalikan lagi',
		'fset'		=> 'Hapus',
		'ok'		=> 'Ya, Hapus halaman ini',
		'cancel'	=> 'Batalkan',
		'err'		=> 'Target tidak ada',
	
	);
	
	
		
?>
