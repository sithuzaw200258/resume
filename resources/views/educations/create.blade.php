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
                            <li class="breadcrumb-item active" aria-current="page">Create Education</li>
                        </ol>
                    </nav>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <h6 class="mb-0">Create Education</h6>
                        </div>
                    </div>
                </div>

                <form action="{{ route('educations.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <div class="mb-3">
                                    <label for="degree" class="form-label">Degree</label>
                                    <input type="text" class="form-control @error('degree') is-invalid @enderror"
                                        id="degree" name="degree" value="{{ old('degree') }}"
                                        placeholder="Enter your degree">
                                    @error('degree')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="school_name" class="form-label">School Name</label>
                                    <input type="text" class="form-control @error('school_name') is-invalid @enderror" id="school_name" name="school_name"
                                        value="{{ old('school_name') }}" placeholder="Enter school name">
                                    @error('school_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="school_location" class="form-label">School Location</label>
                                    <input type="text" class="form-control @error('school_location') is-invalid @enderror" id="school_location" name="school_location"
                                        value="{{ old('school_location') }}" placeholder="Enter school location">
                                    @error('school_location')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="graduated_year" class="form-label">Graduated Year</label>
                                    <input type="text" class="form-control @error('graduated_year') is-invalid @enderror"
                                        id="graduated_year" name="graduated_year" value="{{ old('graduated_year') }}"
                                        placeholder="Enter graduated year">
                                    @error('graduated_year')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('educations.index') }}"
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