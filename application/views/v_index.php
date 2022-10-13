<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'> Pada pengertian codeigniter diatas tadi dijelaskan bahwa codeigniter menggunakan metode MVC.
        apa itu MVC ?, kita juga tau apa itu MVC sebelum masuk lebih jauh dalam belajar Codeigniter.</p>
        <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi 3 komponen yaitu model, view, dan controller</p>
        <ol type="a">
            <li>Model</li>
    <p align='justify'> Model adalah kelas yang mempresentasikan atau memodelkan type data yang akan digunakan oleh aplikasi.
        Model juga dapat di definisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database.
        Semua intruksi atau fungsi yang berhubungan dengan pengolahan yang berhubungan dengan database lainnya. 
        Semua intruksi atau fungsi yang berhubungan dengan databse diletakan didalam model. 
        Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka 
        dapat memodelkan objek lingkaran sebagai objek. </p>
        <p align='justify'>Sebagai catatan, semua model harus disimpan didalam application/models </p>
        <li>view</li>
        <p align="justify">View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser). Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
		<li>Controler</li>
		<p align="justify">Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan didatabase (model) di ambil oleh controller dan kemudian controller pula yang menampilkan nya ke view. Jadi controller lah yang mengolah intruksi.</p>
			<p align="justify">Dari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung viewdan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilann aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengancepat dan terstruktur.</p>
</section>