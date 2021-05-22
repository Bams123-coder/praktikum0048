@extends('layout.app')
@section('judul', 'Artikel')
    
@section('isi')
    <div>
      <div class="entry-content"> 
        <h2><strong>Apa Itu Code Igniter ?</strong><strong></strong></h2> 
        <p><strong>CodeIgniter </strong>adalah Framework yang dikembangkan pada Bahasa Pemrograman PHP. Code Igniter bersifat Open-Source yang banyak digunakan oleh para developer dalam mengembangkan website yang dinamis. Code Igniter mengikuti pola kode MVC, sehingga kamu dapat membagi kode kode menjadi 3 bagian yang diberikan di bawah ini:</p> 
        <p><strong>M =&gt; Model</strong> // Semua panggilan yang berhubungan dengan Database akan ditentukan di sini, seperti pengambilan data, Insert, Delete dan Update Data.</p> 
        <p><strong>V =&gt; View </strong>// Sesuai Namanya, View hanya tampilan yang biasa disebut HTML. Semua data terkait dengan View (html) akan ditentukan di sini.</p> 
        <p><strong>C =&gt; Controller </strong>// Merupakan jembatan antara model dan view. Ketika kamu mencari sesuatu di browser web. Hal tersebut akan langsung menuju ke controller dan controller menggunakan Model dan view untuk menampilkan hasil yang sesuai.</p> 
        <div class="wp-block-image"><figure class="aligncenter"><img width="384" height="387" alt="" sizes="(max-width: 384px) 100vw, 384px" nitro-lazy-srcset="https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/07e8d1880ac0a35615705172f95ee9ce.e1.png 384w, https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/3d5e6e76045168eb1608b29c232a6624.e1-150x150.png 150w, https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/fc91b3a091a3ddf846731785e8f42f0d.e1-298x300.png 298w, https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/dc10b017373ab0992f0e42dd868672c7.e1-75x75.png 75w" nitro-lazy-src="https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/07e8d1880ac0a35615705172f95ee9ce.e1.png" class="wp-image-3150 lazyloaded" nitro-lazy-empty="" id="NDEyOjUxNg==-1" src="https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/07e8d1880ac0a35615705172f95ee9ce.e1.png" srcset="https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/07e8d1880ac0a35615705172f95ee9ce.e1.png 384w, https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/3d5e6e76045168eb1608b29c232a6624.e1-150x150.png 150w, https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/fc91b3a091a3ddf846731785e8f42f0d.e1-298x300.png 298w, https://cdn-bnned.nitrocdn.com/ipeMQLboWuqPHEkOeMMQJeRBsiuoYLsD/assets/static/optimized/wp-content/uploads/2019/12/dc10b017373ab0992f0e42dd868672c7.e1-75x75.png 75w"></figure></div> 
        <p><strong><em>Framework</em></strong> memudahkan programmer karena didalamnya ada begitu banyak Libraries yang serupa, kamu bisa menggunakan dan mendapatkan hasil spesifik sesuai apa yang kamu mau. Ada ribuan orang yang telah menguji dan menggunakan Framework, sehingga kamu dapat mempercayai kerangka tersebut.</p> 
        <p><strong>Code Igniter </strong>dikembangkan pertama kali oleh Rick Ellis pada tahun 2006 dengan logo api yang menyala. Logo tersebut mengartikan bahwa code igniter dengan cepat “membakar” semangat para web developer dalam membangun website yang cepat dan dinamis.</p>
        <p>Baca Juga Artikel Terkait Bahasa Programming: </p> 
        
        <h3><strong>Fitur-Fitur Code Igniter</strong><strong></strong></h3> 
        <ul>
          <li>Framework berbasis Model-View-Controller (MVC)</li>
          <li>Support terhadap mayoritas jenis Database</li>
          <li>Mendukung Query Builder</li>
          <li>Bersifat Independent</li>
          <li>Validasi Form dan Data</li>
          <li>Session Management</li>
          <li>Mengamankan website dari XSS (Cross site scripting)</li>
          <li>File Uploading class</li>
        </ul> 
          <h3><strong>Keuntungan Code Igniter</strong>
          <strong></strong></h3> 
          <ul>
            <li>Cepat, Ringan, dan dapat diandalkan</li>
            <li>Codeigniter adalah cara paling mudah untuk memanfaatkan program modular</li>
            <li>PHP Codeigniter kompatibel dengan sebagian besar server web, berbagai sistem operasi dan platform.</li>
            <li>Dapat digunakan di banyak sistem manajemen database</li>
            <li>Code Igniter memiliki bahasa program yang sama dengan yang digunakan pada website</li>
            <li>Memiliki komunitas besar, jadi kamu bisa dengan mudah mencari informasi ketika mengalami kesulitan di Code Igniter</li>
            <li>Kompatible dengan berbagai jenis database</li>
            <li>Ramah pemula dengan menghadirkan dokumentasi <em>User_Guide</em></li>
          </ul> 
          <h3><strong>Cara Kerja CodeIgniter</strong><strong></strong></h3> 
          <p>Code igniter merupakan framework MVC. MVC adalah Model-view-controller. Ketika kamu anggaplah mencari suatu informasi, controller akan merespon permintaan kamu, lalu menyajikan informasi yang kamu cari jika memang tersedia.</p> 
          <p>Contoh kecilnya yakni, jika kamu ingin mencari id=3, maka controller akan merespon permintaan kamu, lalu meminta <em>Model</em>&nbsp;untuk mengambil data dari id=3. Model nantinya akan memberikan data tersebut kembali ke controller. Controller akan menyajikan data tersebut kepada <em>View</em>&nbsp;dengan format yang mudah dikenali (Human-readable format). &nbsp;Dan hasilnya akan muncul pada browser kamu.</p> 
          <p><strong>Kesimpulan</strong></p> 
          <ul>
            <li>Codeigniter adalah framework php yang digunakan untuk mengembankan aplikasi</li>
            <li>Keseluruhan source code pada codeigniter hanya sebesar 2MB, yang mana membuatnya menjadi mudah dipelajari dan cara kerjanya</li>
            <li>Fitur built-in pada codeigniter didesain agar bekerja secara independen tanpa harus bergantug pada kompoen lainnya</li>
            <li>Framework Codeigniter menggunakan desain arsitektural MVC</li>
            <li>Codeigniter didokumentasinkan dengan baik, ada banyak tutorial dan forum untuk Tanya jawab</li>
            <li>Codeigniter memiliki library yang mirip dengan bahasa program php yang lain</li>
            <li>Codeigniter sangat mudah dikuasai bagi siapa saja yang mengenal PHP</li>
            <li>Dalam Codeigniter, user meminta informasi, controller merespon permintaan tersebut, dan menyajikan informasi sesuai yang diminta.</li>
          </ul> 
          
      </div>
    </div>
@endsection