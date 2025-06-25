@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Liste des projets</h1>

    <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter un projet</a>

    @if(session('success'))
        <div class="mt-4 text-green-600">{{ session('success') }}</div>
    @endif

    <table class="table-auto w-full mt-6 border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Titre</th>
                <th class="border px-4 py-2">Technologies</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{ $project->title }}</td>
                    <td class="border px-4 py-2">{{ $project->technologies }}</td>
                    <td class="border px-4 py-2 flex gap-2">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600">Modifier</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Supprimer ce projet ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
