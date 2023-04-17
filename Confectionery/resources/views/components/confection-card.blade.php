@props(['confection'])

<x-card>
    
    <div class="flex">
        
        <div>
            <h3 class="text-2xl">
                <a href="/confections/{{$confection->id}}">{{$confection->cname}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$confection->prizewinning}}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$confection->type}}
            </div>
        </div>
    </div>
</x-card>