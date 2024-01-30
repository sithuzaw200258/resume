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

                <form action="{{ route('skills.update',$skill) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Skill Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name',$skill->name) }}"
                                        placeholder="Enter your skill">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="rating" class="form-label">Skill Rating (optional)</label>
                                    <input type="text" class="form-control @error('rating') is-invalid @enderror" id="location_location" name="rating"
                                        value="{{ old('rating',$skill->rating) }}" placeholder="Enter skill rating">
                                    @error('rating')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('skills.index') }}"
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