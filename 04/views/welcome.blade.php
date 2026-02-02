<x-layout>
    <h1>Home</h1>
        <p>Mój pierwszy projekt z frameworkiem Laravel</p>

        <p><br>
    <h1>Projects Page</h1>
    
        <ul>
            @foreach($projects as $project)
                <li>
                    <a href="{{ $project['id'] }}">{{ $project->name }}</a> Technologie:
                    
                    @foreach ($project->technologies as $technology)
                        {{ $technology->name }}
                    @endforeach
                </li>
            @endforeach
        </ul>

    <div> {{ $projects->links() }}</div>

</x-layout>