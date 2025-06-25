@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-6">{{ $project->title }}</h1>
    <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="mb-6 rounded w-full max-h-[500px] object-cover">

    <div class="mb-4">
        <h3 class="text-lg font-semibold">Description :</h3>
        <p class="text-gray-800 mt-2">{{ $project->description }}</p>
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold">Technologies :</h3>
        <p class="text-gray-800 mt-2">{{ $project->technologies }}</p>
    </div>

    <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">← Retour à la galerie</a>

    @if($project->github_url)
        <a href="{{ $project->github_url }}" class="text-indigo-600 underline mr-4" target="_blank">GitHub</a>
    @endif
    @if($project->live_url)
        <a href="{{ $project->live_url }}" class="text-green-600 underline" target="_blank">Voir le site</a>
    @endif
</div>
@endsection
