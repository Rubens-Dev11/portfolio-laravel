@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Ajouter un projet</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        @include('admin.projects.form')
        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
