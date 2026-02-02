<x-layout>
    <div class="max-w-2xl mx-auto py-12 px-4">
        <a href="/" class="inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800 transition mb-6">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Powrót do listy
        </a>

        <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100">
            <div class="bg-indigo-700 px-8 py-6">
                <h1 class="text-white text-sm font-semibold uppercase tracking-widest opacity-80 mb-1">Project Page</h1>
                <h2 class="text-white text-3xl font-bold">{{ $project['name'] }}</h2>
            </div>

            <div class="p-8">
                <h3 class="text-gray-900 font-bold mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                    Opis projektu
                </h3>
                
                <p class="text-gray-600 leading-relaxed bg-gray-50 p-4 rounded-xl border border-gray-100">
                    {{ $project['description'] }}
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100 flex justify-between items-center text-sm text-gray-500">
                    <span>ID Projektu: #{{ $project['id'] }}</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-800 font-medium">
                        Aktywny
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout>