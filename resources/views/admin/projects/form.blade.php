<div class="grid gap-4">
    <div>
        <label>Titre</label>
        <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}" required class="w-full border p-2 rounded">
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" required class="w-full border p-2 rounded">{{ old('description', $project->description ?? '') }}</textarea>
    </div>
    <div>
        <label>Technologies</label>
        <input type="text" name="technologies" value="{{ old('technologies', $project->technologies ?? '') }}" class="w-full border p-2 rounded">
    </div>
    <div>
        <label>Image (nom de fichier)</label>
        <input type="text" name="image" value="{{ old('image', $project->image ?? '') }}" class="w-full border p-2 rounded">
    </div>
    <div>
        <label>GitHub URL</label>
        <input type="url" name="github_url" value="{{ old('github_url', $project->github_url ?? '') }}" class="w-full border p-2 rounded">
    </div>
    <div>
        <label>Live URL</label>
        <input type="url" name="live_url" value="{{ old('live_url', $project->live_url ?? '') }}" class="w-full border p-2 rounded">
    </div>
</div>
