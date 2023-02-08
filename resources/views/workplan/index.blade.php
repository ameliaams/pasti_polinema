@extends('layouts.app')

@section('title', 'Program Kerja')

<div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
    <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="index.html"><img class="brand-logo" alt="CryptoDash admin logo" src="{{ asset('assets/app-assets/images/ico/logo pasti.jpg') }}" /></a>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="/dashboard"><i class="icon-home"></i></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="/" target="_blank"><i class="icon-eye"></i><span class="menu-title" data-i18n="">Lihat Website</span></a>
            </li>
            <li class=" nav-item"><a href="/about"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Data Tentang UKM</span></a>
            </li>
            <li class=" nav-item"><a href="/faq"><i class="icon-question"></i><span class="menu-title" data-i18n="">Data FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="/relation"><i class="icon-cup"></i><span class="menu-title" data-i18n="">Data Relasi</span></a>
            </li>
            <li class=" nav-item"><a href="/team"><i class="icon-users"></i><span class="menu-title" data-i18n="">Data DPH 26</span></a>
            </li>
            <li class=" nav-item active"><a href="/workplan"><i class="icon-calendar"></i><span class="menu-title" data-i18n="">Program Kerja</span></a>
            </li>
            <li class=" nav-item"><a href="/contact"><i class="icon-envelope"></i><span class="menu-title" data-i18n="">Kontak</span></a>
            </li>
        </ul>
    </div>
</div>

@section('content')
<div class="col-12 text-right">
    <a class="btn-gradient-primary my-1" href="/workplan/create">Tambah Data</a>
</div>
@if ($message = Session::get('message'))
<div class="alert alert-success">
    <strong>Berhasil</strong>
    <p>{{ $message }}</p>
</div>
<div class="card">
    @endif

    <div class="card-content">
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover table-xl mb-0 mt-2">
                <thead>
                    <tr>
                        <th class="border-top-0">Nama Program Kerja</th>
                        <th class="border-top-0">Deskripsi</th>
                        <th class="border-top-0">Foto</th>
                        <th class="border-top-0">Aksi</th>
                        <th class="border-top-0"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workplan as $work)
                    <tr>
                        <td class="text-truncate">{{$work->name}}</td>
                        <td class="text-truncate">
                            {{ Str::limit($work->description, 50) }}
                            @if (strlen($work->description) > 50)
                            <span>...</span>
                            @endif
                        </td>
                        <td class="text-truncate">
                            <img src="/image/{{$work->image}}" alt="" class="img-fluid" width="100">
                        </td>
                        <td class="text-truncate">
                            <a href="{{ route('workplan.edit', $work->id) }}" class="mb-0 btn-sm btn btn-outline-warning round mb-1">Edit</a>
                            <form action="{{ route('workplan.destroy', $work->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mb-0 btn-sm btn btn-outline-danger round">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection