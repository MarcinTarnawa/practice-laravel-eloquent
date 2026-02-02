<x-layout>
<br>
   <h1>Project Page</h1>
        <h2>{{$project['name']}} </h2>
    <ul>
       <li>Description: {{ $project['description'] }} </li>
    </ul>
<a href="/">Back</a>
</x-layout>