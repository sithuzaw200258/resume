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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Language</li>
                        </ol>
                    </nav>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <h6 class="mb-0">Create Language</h6>
                        </div>
                    </div>
                </div>

                <form action="{{ route('languages.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Language Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}"
                                        placeholder="Enter your language name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="level" class="form-label">Language Level (optional)</label>
                                    <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level"
                                        value="{{ old('level') }}" placeholder="Enter language level">
                                    @error('level')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('languages.index') }}"
                                        class="btn btn-outline-secondary border-0 px-5">Cancel</a>
                                    <button class="btn btn-primary px-5">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection