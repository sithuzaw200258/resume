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
                                <li class="breadcrumb-item active" aria-current="page">Language Lists</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <h6 class="mb-0">Language Lists</h6>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('languages.create') }}" class="btn btn-outline-primary"><i
                                class="bi bi-plus-circle me-2"></i>Create Language</a>
                    </div>
                </div>

                <div class="row row-gap-2 px-2">
                    @forelse ($languages as $language)
                        <div class="col-md-6 px-1">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-0 fw-bold">
                                        {{ $language->name }} 
                                        @if ($language->level)<span class="fw-bold">({{ $language->level }})</span> @endif
                                    </h6>
                                    <div class="text-end">
                                        <a href="{{ route('languages.edit', $language) }}" class=""><i
                                                class="bi bi-pencil-square"
                                                style="color: rgb(255, 166, 0); font-size:1rem;"></i></a>

                                        <form action="{{ route('languages.destroy', $language) }}" method="POST"
                                            class="d-inline-block" id="deleteForm">
                                            @csrf
                                            @method('delete')
                                            <button  class="btn border-0 px-0 py-0"><i class="bi bi-trash-fill"
                                                        style="color: rgb(223, 7, 7);font-size:1rem;"></i></button>
                                        </form>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h6 class="mb-0 text-danger">There is no language...
                                    <a href="{{ route('languages.create') }}" class="btn btn-link">Create Language</a>
                                </h6>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
