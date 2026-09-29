<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
     <h1>My Name Is: {{$name}} </h1>
     @foreach ( $jobs as $job )
     <div>{{ $job['title']}} : {{ $job['salary'] }}</div>
     @endforeach
</div>
