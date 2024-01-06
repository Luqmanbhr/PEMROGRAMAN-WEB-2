- Nama : Luqman Bahri
- Nim : 701220140
- Kelas : 3D Sistem Informasi

## Ini Merupakan Aplikasi Pendataan warga tingkat RT
	dimana ada beberapa fitur didalamnya yaitu :
- Mendata data warga yang tinggal di lingkup rt dilengkapi dengan CRUD
- Data kartu keluarga yang terkoneksi dengan data warga agar mempermudah pengelolaan
- Data mutasi yaitu untuk mendapatkan informasi apabla ada warga yang melakukan mutasi dan otomatis akan hilang dari data warga
- Data user yaitu untuk mengelola data pengguna aplikasi dan mengaturnya

## Instalasi:
- Clone repositori ini
- Pada folder `htdocs`, buat folder `penduduk`
- Copy repositori ini ke folder tersebut
- Jika Anda menggunakan linux, mungkin perlu mengubah permissionnya menjadi 755 (`sudo chmod -R 755`)
- Buat database `db_warga`
- Import skema yang ada di folder `database` ke dalam database tersebut
- Buka `http://localhost/penduduk`
- Masukkan username dan password

## Todo list:
- ~~User hanya bisa lihat yang rt dan rw'nya sama dengan user tersebut saja~~ (batal)
- ~~Pembatasan akses halaman berdasarkan status_user~~
- Jika menambahkan id_kepala_keluarga, maka otomatis menambahkannya pada pivot
- Ubah dari # id menjadi nomor urut


## Username dan Password
- Admin 
	usarename : admin	password : 123
	Punya semua akses
- Ketua
	usarename : ketua password : 123
	Punya semua akses
- Staff
	username : furqon password : 123
	hanya bisa melihat atau read only
