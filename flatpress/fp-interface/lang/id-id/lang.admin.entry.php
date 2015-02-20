<?php
/* 
# Diterjemahkan oleh eggoez - http://eggoez.com/
# Bila ada kesalahan baik secara penulisan atau ucapan kata
# Silahkan laporkan lewat e-mail di eggoez@yahoo.com
# Hargailah Karya Orang Lain dengan tidak Merubah Isi &
# Terimakasih sudah menggunakan Bahasa Indonesia :)
*/

	$lang['admin']['entry']['submenu'] = 
	array (
		'list'		=> 'Kelola Entri',
		'write'		=> 'Tulis Entri',
		'cats'		=> 'Kelola Ketegori'
	);


	/* default action */
	
	$lang['admin']['entry']['list'] = 
	array(
		'head'		=> 'Kelola Entri',
		'descr'		=> 'Silahkan pilih entri untuk dirubah atau <a href="admin.php?p=entry&amp;action=write">tulis baru</a>'.
					'<br /><a href="admin.php?p=entry&amp;action=cats">Kelola kategori</a>',
		'filter'	=> 'Sisihkan: ',
		'nofilter'	=> 'Lihat semua',
		'filterbtn'	=> 'Terapkan Penyisihan',
		'sel'		=> 'Sel', // checkbox
		'date'		=> 'Tanggal',
		'title'		=> 'Judul',
		'author'	=> 'Penulis',
		'comms'		=> 'Komentar', // comments
		'action'	=> 'Aksi',
		'act_del'	=> 'Hapus',
		'act_view'	=> 'Lihat',
		'act_edit'	=> 'Ubah'
	);
	
	/* write action */
	$lang['admin']['entry']['write'] = 
	array(
		'head'		=> 'Tulis Entri',
		'descr'		=> 'Ubah formulir untuk menulis sebuah entri',
		'uploader'	=> 'Unggah',
		'fieldset1'	=> 'Ubah',
		'subject'	=> 'Judul (*):',
		'content'	=> 'Konten (*):',
		'fieldset2'	=> 'Ajukan',
		'submit'	=> 'Publikasikan',
		'preview'	=> 'Pertinjau',
		'savecontinue'	=> 'Simpan &amp; Lanjutkan',
		'archive'	=> 'Arsip',
		'nocategories'	=> 'Tidak ada katogori. <a href="admin.php?p=entry&amp;action=cats">Buat baru'. 
					'categories</a> dari halaman pengelola utama. '.
					'<a href="#save">Simpan</a> entri dahulu.',
		'saveopts'	=> 'Pilhan penyimpanan',
		'success'	=> 'Entri Anda sukses dipublikasikan',
		'otheropts'	=> 'Pilihan lainya',
		'commmsg'	=> 'Kelola komentar untuk entri ini',
		'delmsg'	=> 'Hapus entri ini',
		//'back'		=> 'Back discarding changes',
	);
	

	$lang['admin']['entry']['list']['msgs'] = array(
		1	=> 'Entri sudah disimpan',
		-1	=> 'Ada kesalahan dalam menimpan 
					entri ini',
		2	=> 'Entri berhasil dihapus',
		-2	=>	 'Ada kesalahan dalam menghapus 
					entri ini',
	);

	
	$lang['admin']['entry']['write']['error'] = array(
		'subject'	=> 'Anda harus memberi judul entri terlebih dahulu',
		'content'	=> 'Anda tidak bisa menerbitkan entri kosong',
	);
	
	$lang['admin']['entry']['write']['msgs'] = array(
		1	=> 'Entri berhasil disimpan',
		-1	=> 'Nampaknya ada kesalahan: entri Anda gagal disimpan',
		-2	=> 'Nampaknya ada kesalahan: entri Anda tidak disimpan; pembaca indek sedang rusak',
		-3	=> 'Nampaknya ada kesalahan: entri Anda disimpan di konsep',
		-4	=> 'Nampaknya ada kesalahan: entri Anda disimpan di konsep; pembaca indek sedang bermasalah',
		'draft'=> 'Anda mengubah entri <strong>konsep</strong> '
	);

	
	/* comments */
	
	$lang['admin']['entry']['commentlist'] = 
	array(
		'head'		=> "Kementar untuk entri", 
		'descr'		=> 'Pilih sebuah komentar untuk dihapus',
		'sel'		=> 'Sel',
		'content'	=> 'Konten',
		'date'		=> 'Tanggal',
		'author'	=> 'Penulis',
		'email'		=> 'E-mail',
		'ip'		=> 'IP',
		'actions'	=> 'Aksi',
		'act_edit'	=> 'Ubah',
		'act_del'	=> 'Hapus',
		'act_del_confirm' => 'Apa Anda yakin akan menghapus komentar ini?',
		'nocomments'	=> 'Saat ini tidak ada komentar pada entri ini.',
		
	
	);

	$lang['admin']['entry']['commentlist']['msgs'] =
	array(
		1	=> 'Komentar berhasil dihapus.',
		-1	=> 'Nampaknya ada kesalahan dalam mengahapus
					komentar ini',
		
	);

	$lang['admin']['entry']['commedit'] = 
	array(
		'head'		=> "Ubah komentar untuk entri", 
		'content'	=> 'Konten',
		'date'		=> 'Tanggal',
		'author'	=> 'Penulis',
		'www'		=> 'Alamat',
		'email'		=> 'E-mail',
		'ip'		=> 'IP',
		'loggedin'	=> 'Orang terdaftar',
		'submit'	=> 'Simpan'
		
	
	);

	$lang['admin']['entry']['commedit']['msgs'] =
	array(
		1	=> 'Komentar berhasil dirubah',
		-1	=> 'Ada kesalahan dalam perubahan komentar',
	);
	
	/* delete action */
	
	$lang['admin']['entry']['delete'] = 
	array(
		'head'		=> 'Hapus entri', 
		'descr'		=> 'Atur sebuah entri untuk dihapus:',
		'preview'	=> 'Lihat',
		'confirm'	=> 'Yakin untuk menghapus?',
		'fset'		=> 'Hapus',
		'ok'		=> 'Ya.. Hapus entri ini',
		'cancel'	=> 'Tidak',
		'err'		=> 'Entri tidak dapat ditemukan',
	
	);
	
	/* category mgmt */
	
	$lang['admin']['entry']['cats'] =
	array(
		'head'		=> 'Ubah ketegori',
		'descr'		=> '<p>Pakailah daftar di bawah untuk menambah dan merubah kategori. </p><p>Item kategori berformat "nama kategori :<em>nomor_id</em>". Id item akan berformat kebawah.</p>
		
	<p>Contoh:</p>
	<pre>
Asal :1
Berita :2
--Coretan :3
--Tugas :4
----Lain-lain :5
Informasi :6
	</pre>',
		'clear'		=> 'Hapus semua data kategori',
	
		'fset1'		=> 'Ubah',
		'fset2'		=> 'Ajukan perubahan',
		'submit'	=> 'Simpan'
	);
	
	$lang['admin']['entry']['cats']['msgs'] = array(
		
		1	=> 'Kategori berhasil disimpan',
		-1	=> 'Nampaknya ada kesalahan dalam meyimpan kategori',
		2	=> 'Kategori berhasil dibersihkan',
		-2	=> 'Nampaknya ada yang salah, silahkan dicoba lagi',
		-3 	=> 'IDs kategori harus angka positif (0 tidak dibolehkan)'

	);
	
	
		
?>
