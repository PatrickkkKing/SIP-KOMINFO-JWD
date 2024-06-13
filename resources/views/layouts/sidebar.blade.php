<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#inventory-dropdown").click(function (e) {
                e.preventDefault();
                $("#network-device-dropdown").toggle();
            });
        });
    </script>
    
</head>
<body>
    <div class="aside1">
        <header>
            <h5 style="color: whitesmoke; margin-bottom: 15px;">SIMKES</h5>
            <img src="{{ asset('img/admin.png') }}" class="brand">
            
            @if (empty(Auth::user()->name))
                <a href="{{url('layouts/error')}}">
                <div style="justify-content: center; display:flex;">
                    <div class="alert alert-warning">
                        Silakan untuk login ulang kembali... Terima kasih.
                        <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                </div>
            @else
                <div class="user">{{ Auth::user()->name }}</div>
            @endif
        </header>        
    
        <aside>
            <ul>
                <li>
                    <a href="{{url('home/')}}">
                        <img class="icon" src="{{ asset('img/dashboard.png') }}" alt=""> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('simkesTugas/')}}">
                        <img class="icon" src="{{ asset('img/task.png') }}" alt=""> Tugas
                    </a>
                </li>
                <li>
                    <a href="{{url('simkesMapel/')}}">
                        <img class="icon" src="{{ asset('img/mapel.png') }}" alt=""> Mata Pelajaran
                    </a>
                </li>
                <li>
                    <a href="{{url('simkesAbsen/')}}">
                        <img class="icon" src="{{ asset('img/absen.png') }}" alt=""> Absensi
                    </a>
                </li>
                <li>
                    <a href="{{url('simkesNilai/')}}">
                        <img class="icon" src="{{ asset('img/penilaian.png') }}" alt=""> Penilaian
                    </a>
                </li>
                <li>
                    <a href="{{url('simkesJadwal/')}}">
                        <img class="icon" src="{{ asset('img/jadwal.png') }}" alt=""> Jadwal
                    </a>
                </li>
                {{-- <li>
                    <a href="javascript:void(0);" id="inventory-dropdown">
                        <img class="icon" src="{{ asset('img/inventory.png') }}" alt=""> Inventory
                        <span class="dropdown-arrow">▼</span>
                    </a>
                    <ul id="network-device-dropdown" style="display: none;">
                        <li>
                            <a href="{{ url('network/') }}">
                                <img class="icon" src="{{ asset('img/wifi-signal.png') }}" alt=""> Network Device
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('karyawan/') }}">
                                <img class="icon" src="{{ asset('img/karyawan.png') }}" alt=""> Karyawan
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{url('home/')}}">
                        <img class="icon" src="{{ asset('img/info.png') }}" alt=""> Info
                    </a>
                </li>
                <li style="margin-top: 6%">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <img class="icon" src="{{ asset('img/logout.png') }}" alt=""> Logout
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    
</body>
</html>