@extends('welcome')
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
        <title>Pelatihan Digital Talent Scholarship| KOMINFO </title>

@section('content')

    <h1 style="font-weight: bold">Selamat datang, Ayo segera kembangkan dirimu dengan mengikuti pelatihan di Digital Talent Schoolarship.</h1>
    <p>Digital Talent Scholarship (DTS) adalah program pelatihan pengembangan kompetensi yang telah diberikan kepada talenta digital Indonesia sejak tahun 2018. Program ini ditunjukan untuk meningkatkan keterampilan dan daya saing, produktivitas, profesionalisme SDM bidang teknologi informasi dan komunikasi bagi angkatan kerja muda Indonesia, masyarakat umum, dan aparatur sipil negaradi bidang Komunikasi dan Informatika sehingga dapat meningkatkan produktivitas dan daya saing bangsa di era Industri 4.0, serta mampu memenuhi kebutuhan tenaga terampil di bidang teknologi. 

    Program DTS secara garis besar dibagi menjadi delapan Akademi, yaitu: 
    <p>1. Fresh Graduate Academy (FGA)</p>
    <p>2. Vocational School Graduate Academy (VSGA)</p>
    <p>3. Thematic Academy (TA)</p>
    <p>4. Professional Academy (ProA)</p>
    <p>5. Government Transformation Academy (GTA)</p>
    <p>6. Digital Entrepreneurship Academy (DEA)</p>
    <p>7. Digital Leadership Academy (DLA)</p>
    <p>8. Talent Scouting Academy (TSA)</p>
   
    Kementerian Komunikasi dan Informatika Republik Indonesia dalam hal ini berupaya untuk menciptakan ekosistem seimbang untuk memaksimalkan peran pentahelix (pemerintah, komunitas/masyarakat, institusi pendidikan tinggi, dunia usaha, dan media) untuk menjadi fasilitator dan akselerator pendukung ekonomi digital.</p>
    
    <div class="d-flex row">
        <div class="col-md-3">
            <div class="card" style="width: 100%; margin-top: 20px;">
                <img src="{{ asset('img/mahasiswa.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold">Mahasiswa</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="#" class="btn btn-primary">Cek Sekarang</a>
                </div>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="card" style="width: 100%; margin-top: 20px;">
                <img src="{{ asset('img/lulusan-baru.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold">Lulusan Baru</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="#" class="btn btn-primary">Cek Sekarang</a>
                </div>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="card" style="width: 100%; margin-top: 20px;">
                <img src="{{ asset('img/wirausaha.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold">Wirausaha dan UMKM</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="#" class="btn btn-primary">Cek Sekarang</a>
                </div>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="card" style="width: 100%; margin-top: 20px;">
                <img src="{{ asset('img/pekerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold">Pekerja Terampil</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="#" class="btn btn-primary">Cek Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection