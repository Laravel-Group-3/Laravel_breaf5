@extends('layouts.app')

@section('content')
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                        @auth
                            <img class="img-profile img-circle img-responsive center-block" src="{{ Auth::user()->img }}" alt="">
                            <ul class="meta list list-unstyled">
                                <li class="name">{{ Auth::user()->name }}</li>
                                <li class="email"><a href="mailto:{{ Auth::user()->email }}"><span class="__cf_email__" data-cfemail="{{ cfEmailEncode(Auth::user()->email) }}">{{ cfEmailEncode(Auth::user()->email) }}</span></a></li>
                            </ul>
                        @endauth
                    </div>
                    <nav class="side-menu">
                        <ul class="nav">
                            <li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
                            {{-- <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li> --}}
                            <li class="active"><a href="#"><span class="fa fa-th"></span> Property</a></li>
                            {{-- <li><a href="#"><span class="fa fa-envelope"></span> Messages</a></li> --}}
                            {{-- <li><a href="user-drive.html"><span class="fa fa-th"></span> Drive</a></li> --}}
                            <li><a href="#"><span class="fa fa-clock-o"></span> Calendar</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="content-panel">
                    <div class="content-header-wrapper">
                        <h2 class="title">My Drive</h2>
                        <div class="actions">
                            <a href="{{ route('farms.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Upload New Item</a>
                        </div>
                    </div>
                    <div class="drive-wrapper drive-grid-view">
                        <div class="grid-items-wrapper">
                            @foreach ($farms as $farm)
                                <div class="drive-item module text-center">
                                    <div class="drive-item-inner module-inner">
                                        <div class="drive-item-title">
                                            <a href="{{ route('farms.show', $farm) }}">{{ $farm->title }}</a>
                                        </div>
                                        <div class="drive-item-thumb">
                                            <img src="{{ $farm->getFirstImageUrl() }}" alt="">
                                        </div>
                                    </div>
                                    <div class="drive-item-footer module-footer">
                                        <ul class="utilities list-inline">
                                            <li><a href="{{ route('farms.edit', $farm) }}" data-toggle="tooltip" data-placement="top"
                                                    title data-original-title="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="{{ route('farms.show', $farm) }}" data-toggle="tooltip" data-placement="top"
                                                    title data-original-title="view"><i class="fa fa-eye"></i></a></li>
                                            <li>
                                                <form action="{{ route('farms.destroy', $farm) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link" data-toggle="tooltip" data-placement="top"
                                                        title data-original-title="delete"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th class="type"></th>
                                    <th class="name truncate">Name</th>
                                    <th class="date">Uploaded</th>
                                    <th class="size">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-text-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Meeting Notes.txt</a></td>
                                        <td class="date">Sep 23, 2015</td>
                                        <td class="size">18 KB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
