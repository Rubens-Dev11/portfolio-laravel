<section class="py-16 bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-10">
            Quelques-uns de mes derniers travaux
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-5">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-40 object-cover rounded">
                    <h3 class="mt-4 font-bold text-lg text-gray-900 dark:text-white">
                        {{ $project->title }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ $project->category }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
