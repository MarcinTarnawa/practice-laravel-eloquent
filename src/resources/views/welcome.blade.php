<x-layout>
    <div class="max-w-4xl mx-auto py-8 px-4">
        <header class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-2">Projects Page</h1>
            <p class="text-lg text-indigo-600 font-medium italic">
                Mój pierwszy projekt z frameworkiem Laravel
            </p>
        </header>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100 mb-6">
            <ul class="divide-y divide-gray-200">
                @foreach($projects as $project)
                    <li class="p-6 hover:bg-gray-50 transition duration-150 ease-in-out">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <a href="/{{ $project->id }}" class="text-xl font-bold text-indigo-700 hover:text-indigo-900 transition">
                                    {{ $project->name }}
                                </a>
                                
                                <div class="mt-2 flex flex-wrap items-center gap-2">
                                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Technologie:</span>
                                    @foreach ($project->technologies as $technology)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 border border-indigo-200">
                                            {{ $technology->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="ml-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-8 p-4 bg-gray-50 rounded-xl shadow-inner border border-gray-200">
            {{ $projects->links() }}
        </div>
    </div>
</x-layout>