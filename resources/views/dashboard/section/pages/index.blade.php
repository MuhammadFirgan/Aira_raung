@extends('dashboard.index')
@section('content')


<section class="p-4 md:ml-64 pt-20 w-full flex flex-col gap-4">
    <div class="w-full">
        <h1 class="text-2xl">Home Section</h1>
        @include('partials.home_section')
    </div>
    <div class="w-full mt-10">
        <h1 class="text-2xl">About Section</h1>
        @include('partials.about_section')
    </div>
    <div class="w-full mt-10">
        <h1 class="text-2xl">Contact Section</h1>
        @include('partials.contact_section')
    </div>
</section>


@endsection