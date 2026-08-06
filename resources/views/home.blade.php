@extends('layouts.layout')

@section('title', "It's Saymon - Home")

@section('content')
    <!-- Banner section -->
    @include('sections.banner')

    <!-- About section -->
    @include('sections.about')

    <!-- Services section -->
    @include('sections.services')

    <!-- Project Section -->
    @include('sections.projects')

        <!-- Blog Section -->
    @include('sections.blog')

    <!-- Contact section -->
    @include('sections.contact')
@endsection