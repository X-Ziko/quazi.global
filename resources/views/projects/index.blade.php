@extends('layout.app')

@php
    $headTitle ='Portfolio';
    $title='Portfolio';
    $subTitle='Portfolio';
@endphp

@section('content')

<main class="page-wrapper">



{{-- ========================================= --}}
{{-- ALL WORKS --}}
{{-- ========================================= --}}

<div class="rn-portfolio-area rn-section-gap bg_color--1">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--20">
                    <h2 class="title">All Works</h2>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($projects as $project)

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">

                    <div class="portfolio">
                        <a href="{{ route('project.show',$project->slug) }}">

                            <div class="thumbnail-inner">
                                <img src="{{ asset('storage/'.$project->featured_image) }}"
                                     class="w-100"
                                     style="height:250px; object-fit:cover;">
                            </div>

                            <div class="content">
                                <div class="inner">

                                    <p>{{ $project->category }}</p>

                                    <h4>{{ $project->title }}</h4>

                                    <div class="portfolio-button">
                                        <span class="rn-btn">
                                            Read More
                                        </span>
                                    </div>

                                </div>
                            </div>

                        </a>
                    </div>

                </div>

            @endforeach

        </div>

        {{-- Pagination --}}
        <div class="mt-4 text-center">
            {{ $projects->links() }}
        </div>

    </div>
</div>




</main>

@endsection