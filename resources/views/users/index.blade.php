@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-9">
                {{-- Breadcrumb --}}
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users Lists</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <h6 class="mb-0">Users Details</h6>
                        </div>
                    </div>

                    @if (!$details)
                        <div class="col-12 text-end">
                            <a href="{{ route('user-details.create') }}" class="btn btn-outline-primary"><i
                                    class="bi bi-plus-circle me-2"></i>Create User</a>
                        </div>
                    @endif

                </div>

                <div class="row px-2">
                    <div class="col-12 px-1">
                        @if ($details)
                            <div class="card">
                                <div class="card-body">
                                    <div class="row p-5">
                                        <div class="col-md-9">
                                            <div class="">
                                                <h3 class="mb-0 text-uppercase fw-bold">{{ $details->name }}</h3>
                                                <h6 class="mb-2 text-uppercase fw-medium">{{ $details->position }}</h6>
                                                <p class="mb-0 text-muted">{{ $details->objective }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="">
                                                <img src="{{ asset('storage/'.$details->photo) }}" alt="" class="object-fit-cover mt-2 rounded-circle" width="140" height="140">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row px-5">
                                        <div class="col-md-4">
                                            <div class="">
                                                <h5 class="mb-0 text-uppercase text-white bg-secondary p-1 text-center">Contact</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="">
                                                <ul>
                                                    <li><p class="mb-0">{{ $details->email }}</p></li>
                                                    <li><p class="mb-0">{{ $details->phone }}</p></li>
                                                    <li><p class="mb-0">{{ $details->address }}</p></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <a href="{{ route('user-details.edit', $details) }}" class=""><i
                                                class="bi bi-pencil-square"
                                                style="color: rgb(255, 166, 0); font-size:1rem;"></i></a>

                                        <form action="{{ route('user-details.destroy', $details) }}" method="POST"
                                            class="d-inline-block" id="deleteForm">
                                            @csrf
                                            @method('delete')
                                            <button class="btn border-0 px-0 py-0"><i class="bi bi-trash-fill"
                                                    style="color: rgb(223, 7, 7);font-size:1rem;"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h6 class="mb-0 text-danger">There is no user...
                                        <a href="{{ route('user-details.create') }}" class="btn btn-link">Create User</a>
                                    </h6>
                                    
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
