@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if ($details)
                    <div class="">
                        <h3 class="">Welcome To Resume Builder</h3>
                        <a href="{{ route('resume.index') }}" class="btn btn-primary"><i class="bi bi-eye me-2"></i>View Your Resume</a>
                    </div>
                @else
                    <div class="">
                        <h3 class="">Welcome To Resume Builder</h3>
                        <a href="{{ route('user-details.create') }}" class="btn btn-primary">Build Your Resume Now <i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
