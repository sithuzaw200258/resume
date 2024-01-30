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
                            <li class="breadcrumb-item active" aria-current="page">Edit Experience</li>
                        </ol>
                    </nav>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <h6 class="mb-0">Edit Experience</h6>
                        </div>
                    </div>
                </div>

                <form action="{{ route('experience.update',$experience) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <div class="mb-3">
                                    <label for="job_position" class="form-label">Job Postiton</label>
                                    <input type="text" class="form-control @error('job_position') is-invalid @enderror"
                                        id="job_position" name="job_position" value="{{ old('job_position',$experience->job_position) }}"
                                        placeholder="Enter your job position">
                                    @error('job_position')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name"
                                        value="{{ old('company_name',$experience->company_name) }}" placeholder="Enter company name">
                                    @error('company_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="period" class="form-label">Period</label>
                                    <input type="text" class="form-control @error('period') is-invalid @enderror" id="location_location" name="period"
                                        value="{{ old('period',$experience->period) }}" placeholder="Enter period">
                                    @error('period')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('experience.index') }}"
                                        class="btn btn-outline-secondary border-0 px-5">Cancel</a>
                                    <button class="btn btn-primary px-5">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection