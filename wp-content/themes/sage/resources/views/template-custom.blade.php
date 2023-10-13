{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <x-container class="bg-red-200 font-bold">testing</x-container>
  @endwhile
@endsection
