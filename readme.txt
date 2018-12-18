Sistem yang ada masih ditest secara lokal dan belum di deploy. --------------------------LOCAL--------------------------

Adapun cara mengaksesnya adalah sebagai berikut.

1. Pengguna login, apabila tidak memiliki akun silahkan mendaftar
2. Setelah login, pengguna akan masuk ke dalam tampilan sistem, disana pengguna akan menemukan beberapa tulisan.
	- Daftar obat : memperlihatkan semua obat yang terdaftar dalam database
	- Paracetamol, Amoxicilin, Aspirin, Komix, Amlodipine, Entrostop, Kalsium, Metil Salisilat merupakan obat-obat yang terdaftar dalam database
	- betadine merupakan contoh obat yang tidak terdaftar dalam database

3. Jika ditekan tombol daftar obat maka akan mengeluarkan semua obat yang terekam
4. Jika ditekan tombol obat yang terdaftar (paracetamol, amoxicilin, dll) akan ditampilkan informasi obat yang bersangkutan
5. Jika ditekan tombol obat yang tidak terdaftar maka akan mengeluarkan informasi "null"
6. Selain itu, pengaksesan dapat dilakukan dengan penggantian URL:
Localhost/Progif_api1/read_one.php?nama_obat=.... 

Pada titik-titik silahkan isikan nama-nama obat, baik yang terdaftar maupun tidak, akan terlihat perbedaannya.

--------------------------DEPLOYED--------------------------
1. Silahkan akses link berikut ini : https://bethessore.000webhostapp.com
2. Cara pengaksesan seperti cara seperti diatas, hanya saja pada program ini masih terdapat kebocoran, yaitu jika diganti alamatnya (url) bisa menuju laman yang ditunjuk.
3. Misalkan ingin mengakses daftar obat maka bisa digunakan https://bethessore.000webhostapp.com/read.php serta mengakses informasi masing-masing obat https://bethessore.000webhostapp.com/read_one.php?nama_obat=....

Pada titik-titik silahkan isikan nama-nama obat, baik yang terdaftar maupun tidak, akan terlihat perbedaannya.

--------------------------POSTMAN--------------------------
Jika pengujian dilakukan menggunakan postman, cukup masukkan link atau url yang dapat mengembalikan json formatnya.
1. https://bethessore.000webhostapp.com/read.php
2. https://bethessore.000webhostapp.com/read_one.php?nama_obat=(isikan terserah/kosongkan)