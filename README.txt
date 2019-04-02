Final Project Pemrograman Web
"Nasi Goreng Kambing Kebon Sirih"
Kelompok 1
Dikembangkan oleh:
Vicky Sultan Ahmad - 105216010
Muhammad Dzaky Normansyah - 105216007
Farah Mardiana - 105216005
Sabila Hadinisa - 105216002

Website ini dikembangkan untuk rumah makan Nasi Goreng Kambing Kebon Sirih menggunakan PHP Native sebagai bahasa pemrograman utama, MySQL sebagai database, Sublime Text 3 sebagai Text Editor, dan XAMPP sebagai web server.
Pada saat pengguna mengunjungi website ini, akan langsung diarahkan ke index.php dan disuguhi berbagai macam menu yang ada pada rumah makan ini yang dibagi dalam 3 kategori yaitu Makanan, Minuman, dan Snack. Pada bagian bawah website, terdapat lokasi outlet yang tersebar dalam beberapa tempat dengan fitur Map lengkap dengan narahubung. Pengguna hanya dapat melihat menu pada halaman index.php, untuk memesan, pengguna dapat menekan tulisan "Order" di bagian atas navigasi website dan akan diarahkan ke halaman login. Jika pengguna belum memiliki akun, maka pengguna diharuskan registrasi terlebih dahulu dan secara otomatis akan mendapatkan saldo awal sebesar Rp 30.000 yang nantinya dapat digunakan untuk transaksi. Website ini hanya menerima transaksi dengan eMoney atau Cash dan harus ambil langsung ke tempat, tidak melayani delivery.

Alur pemesanan:
1. Pengguna memasukkan jumlah pesanan pada kolom menu, kemudian klik tombol "Pesan" setiap item yang hendak dipesan.
2. Daftar pesanan akan masuk ke cart/keranjang pesanan yang terletak di pojok kiri atas.
3. Klik tombol "Konfirmasi Pesanan" untuk checkout, klik "Hapus Keranjang" untuk menghapus isi keranjang, klik "Hapus" untuk menghapus item menu dalam keranjang satu per satu.
4. Setelah pengguna menekan tombol "Konfirmasi Pesanan", pengguna akan diarahkan ke halaman Rekap Pesanan.
5. Masukkan waktu ambil pada halaman Rekap Pesanan, apabila pengguna ingin memasukkan catatan tambahan, dapat mengisi kolom "Catatan Tambahan". 
6. Klik "Konfirmasi Pesanan" untuk memesan pesanan, data pesanan akan masuk ke database yang nantinya akan diproses oleh Administrator.
7. Halaman akan menampilkan pesan bahwa transaksi sudah berhasil, dan diberikan link menuju invoice/kwitansi sebagai bukti pesanan.
8. Pada halaman invoice, pengguna dapat mencetak/mengkonversi halaman menjadi PDF dengan klik tombol "Print Invoice"


Fitur andalan:
1. Print Invoice to PDF: Pengguna dapat mencetak invoice dan atau convert halaman invoice menjadi PDF.
2. CMS Administrator: Content Management System. Pengguna login sebagai administrator untuk memproses pesanan masuk. Pengguna sebagai administrator dapat melakukan fungsi CRUD (Create Read Update Delete) pada semua menu dan saldo pengguna.
3. Sistem eMoney: Pengguna disarankan menggunakan saldo yang terdapat pada akunnya dalam bertransaksi, saldo akan otomatis terpotong sesuai tagihan pada invoice.