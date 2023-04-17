<x-layout>
@include('partials._hero')    
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" >
@unless(count($confections)!=0)
<p>No confection found.</p>
@else
@foreach($confections as $confection)
<x-confection-card :confection="$confection" />

@endforeach
@endunless

</div>
<div class="mt-6 p-4"> 
    {{ $confections->links() }}
</div>
</x-layout>