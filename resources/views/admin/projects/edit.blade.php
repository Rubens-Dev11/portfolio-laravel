@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Modifier le projet</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.projects.form')
        <button type="submit" class="mt-4 bg-green-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
