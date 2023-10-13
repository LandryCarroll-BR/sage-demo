@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    <x-alert type="warning" class="bg-blue-200 font-bold text-5xl text-blue-800">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
  @endwhile
@endsection
