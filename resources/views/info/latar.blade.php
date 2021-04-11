@extends('layouts.app')

@section('content')


<div class="card" style="width: 94rem;">
    <img src="{{url('storage/uploads/logo (2).png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h4>Latar Belakang</h4>
        <p class="card-text"><h5>Karang Taruna adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa / Kelurahan atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial.
          Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomis produktif dengan pendayagunaan semua potensi yang tersedia dilingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada.
          Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur penggurus dan masa jabatan dimasing-masing wilayah mulai dari Desa / Kelurahan sampai pada tingkat Nasional. Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang.
          Karang Taruna beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia mulai dari 11 – 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 – 35 tahun.
          Karang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para remaja, misalnya dalam bidang keorganisasian, ekonomi, olahraga, keterampilan, advokasi, keagamaan dan kesenian.
      </h5>
      </p>
        <br>
    <p class="card-text"><h5>Aplikasi Tokokna adalah aplikasi market place yang berfokus terhadap proses penjualan hasil UMKM yang dinaungi oleh Karang Taruna. Aplikasi ini dikembangkan demi untuk mengakomodir atau media promosi bagi penggiat UMKM wilayah Indramayu desa Kenanga dengan berkolaborasi dengan Karang Taruna
    </h5>
      </p>
    </div>
  </div>
<br>

<div class="row row-cols-1 row-cols-md-12 g-4">
    <div class="col">
      <div class="card" style="width: 94rem;">

        <div class="card-body">
          <h4 id="visi"><center>Visi, Misi dan Tujuan</center></h4>
          <h4 class="card-title">Visi</h4>
          <p class="card-text">Mempererat tali persaudaraan antar pemuda untuk meningkatkan partisipasi pemuda dalam kegiatan-kegiatan yang bermanfaat di masyarakat guna meningkatkan peran organisasi kepemudaan.
          </p>
          <br>

          <h4 class="card-title">Misi</h4>
            <p> 1.	Terwujudnya pemuda-pemudi yang bertakwa kepada Tuhan Yang Maha Esa penuh perhatian dan peka terhadap masalah dengan daya tahan fisik dan mental yang kuat dan Teguh dalam pendiriannya serta mampu berkreasi dan berkarya di lingkungan masyarakat.</p>
            <p> 2.	Membangun dan meningkatkan Ekonomi Produktif.</p>
            <p> 3.	Kepedulian terhadap lingkungan sosial masyarakat.</p>
            <p>	4.  Menggalang kemitraan dengan berbagai pihak yang berkompeten dalam masalah Pemuda dan sosial kemasyarakatan.</p>
            <p> 5.	Terwujudnya kesejahteraan sosial yang semakin meningkat bagi warga desa kenanga pada umumnya dan khususnya generasi muda yang memungkinkan pelaksanaan fungsi sosialnya sebagai manusia pembangunan yang mampu mengatasi masalah sosial di lingkungannya.</p>
            <p> 6.	Melestarikan kesenian daerah serta pembangunan minat untuk berolahraga.</p>
          <br>

          <h4 class="card-title">Tujuan</h4>
          <p>Maksud dan tujuan membentuk organisasi karang taruna desa kenanga ini adalah sebagai berikut: </p>
          <p>1.	Meningkatkan nilai keagamaan dan mental spiritual</p>
          <p>2.	Menciptakan Lapangan Pekerjaan Khususnya untuk anggota</p>
          <p>3.	Menciptakan lingkungan yang aman, damai dan harmonis</p>
          <p>4.	Meningkatkan kemandirian di lingkungan Margajaya</p>
          <p>5.	Membangun kerjasama dan sosialitas yang solid </p>
          <p>6.	Meningkatkan mutu pemuda dan pemudi yang berkualitas</p>
          <p>7.	Memaksimalkan potensi yang berada di lingkungan Kelurahan Margajaya </p>
          <p>8.	Menciptakan generasi penerus yang menjanjikan Menghasilkan kreatifitas dan menumbuhkan inovasi pada diri pemuda / pemudi </p>
          <p>9.	Menciptakan nilai jual dan dapat bersaing </p>
          <p>10.Menghindari dan menghilangkan kegiatan yang tidak bermanfaat</p>
        </div>
      </div>
    </div>
</div>
<br>

<div id="galeri">


    <div class="card" style="width: 94rem;">
      <div class="card-body">
        <h4 class="card-title"><center>Galeri</center></h4>

    <div class="card-group">
        <div class="card ml-2" style="width: 10rem;">
          <img src="{{url('storage/uploads/aktivitas/1.jpg')}}" class="card-img-top" width="20px">

        </div>


        <div class="card">
          <img src="{{url('storage/uploads/aktivitas/9.jpg')}}" class="card-img-top" alt="...">
        </div>

        <div class="card">
          <img src="{{url('storage/uploads/aktivitas/7.jpg')}}" class="card-img-top" alt="...">

        </div>
      </div>
    </div>

@endsection
