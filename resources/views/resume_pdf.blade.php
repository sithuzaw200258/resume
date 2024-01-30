@extends('layouts.app_pdf')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                @if ($user)
                    <div class="card px-5 pt-4">
                        <div class="card-body px-5 py-5">
                            <div class="row mb-5">
                                <div class="col-md-8">
                                    <div class="">
                                        <h3 class="mb-0 text-uppercase fw-bold">{{ $user->details->name }}</h3>
                                        <h6 class="mb-2 text-uppercase fw-bold">{{ $user->details->position }}
                                        </h6>
                                        <p class="mb-0 fw-normal">{{ $user->details->objective }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-end">
                                        <img src="{{ asset('storage/' . $user->details->photo) }}" alt=""
                                            class="object-fit-cover mt-2 rounded-circle" width="160" height="160">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-4">
                                    <div class="">
                                        <h6 class="mb-0 text-uppercase text-white p-2 text-center"
                                            style="background-color: rgb(49, 34, 28)">Skills</h6>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="margin-top: -8px;">
                                        <ul>
                                            @foreach ($user->skills as $skill)
                                                <li>
                                                    <p class="mb-0">{{ $skill->name }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-4">
                                    <div class="">
                                        <h6 class="mb-0 text-uppercase text-white p-2 text-center"
                                            style="background-color: rgb(49, 34, 28)">Languages</h6>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="margin-top: -8px;">
                                        <ul>
                                            @foreach ($user->languages as $language)
                                                <li>
                                                    <p class="mb-0">
                                                        {{ $language->name }}
                                                        @if ($language->level)
                                                            <span class="">({{ $language->level }})</span>
                                                        @endif
                                                    </p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-4">
                                    <div class="">
                                        <h6 class="mb-0 text-uppercase text-white p-2 text-center"
                                            style="background-color: rgb(49, 34, 28)">Educations</h6>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="margin-top: -4px; margin-left: 16px;">
                                        @foreach ($user->educations as $education)
                                            <div class="mb-3">
                                                <h6 class="mb-0 fw-bold text-uppercase">{{ $education->degree }}
                                                </h6>
                                                <p class="mb-0">
                                                    {{ $education->school_name }},{{ $education->school_location }}
                                                </p>
                                                <p class="mb-0">{{ $education->graduated_year }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-4">
                                    <div class="">
                                        <h6 class="mb-0 text-uppercase text-white p-2 text-center"
                                            style="background-color: rgb(49, 34, 28)">Experience</h6>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="margin-top: -4px; margin-left: 16px;">
                                        @foreach ($user->experiences as $experience)
                                            <h6 class="mb-0 fw-bold text-uppercase">{{ $experience->job_position }}
                                            </h6>
                                            <ul>
                                                <li>
                                                    <p class="mb-0">{{ $experience->company_name }}</p>
                                                </li>
                                                <li>
                                                    <p class="mb-0">{{ $experience->period }}</p>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="">
                                        <h6 class="mb-0 text-uppercase text-white p-2 text-center"
                                            style="background-color: rgb(49, 34, 28)">Contact</h6>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="margin-top: -8px;">
                                        <ul>
                                            <li>
                                                <p class="mb-0">{{ $user->details->phone }}</p>
                                            </li>
                                            <li>
                                                <p class="mb-0">{{ $user->details->email }}</p>
                                            </li>
                                            <li>
                                                <p class="mb-0">{{ $user->details->address }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
@endsection

