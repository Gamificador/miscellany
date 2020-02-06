<?php /** @var \App\Models\Release $model */?>
@extends('layouts.front', [
    'title' => trans('front/news.show.title', ['name' => $model->title]),
    'description' => '',
])

@section('og')
    <meta property="og:description" content="{{ $model->excerpt }}" />
    <meta property="og:url" content="{{ route('front.news.show', $model->getSlug()) }}" />
@endsection

@section('content')
    <header class="masthead reduced-masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">{{ trans('front/news.title') }}</h1>
                        <p class="mb-5">{{ trans('front/news.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="features" id="releases">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    @include('front.news._recent')
                </div>
                <div class="col-9">
                    <h4>{{ __('front/news.show.title', ['name' => $model->title]) }}
                    @admin
                    <a href="{{ route('voyager.posts.edit', $model) }}" style="float: right;" title="{{ __('crud.edit') }}">
                        <i class="fas fa-pencil-alt fa-xs"></i>
                    </a>
                    @endadmin
                    </h4>
                    @include('front.news._article')

                    <div class="mt-3">
                        <a href="{{ route('front.news') }}">
                            <i class="fa fa-arrow-left"></i> {{ __('front/news.actions.return') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection