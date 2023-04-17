

<x-layout>
@include('partials._search')
<?php
if(isset($confection->contents->free))
{
    $free = $confection->contents->free;
}
else
 {
    $free = '';
 } ?>
<a href="/" class="inline-block text-black ml-4 mb-4" ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <x-card class="p-10">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        
                        <h3 class="text-2xl mb-2">{{$confection->cname}}</h3>
                        <div class="text-xl font-bold mb-4">{{$confection->type}}</div>
                        <div class="text-lg my-4">{{$confection->prizewinning}}
                        </div>
                        <div class="text-lg my-4">{{$free}}</div>
                            <div class="text-lg my-4">fafafafa{{$confection->prices->price}}</div>
                                <div class="text-lg my-4">{{$confection->prices->unit}}</div>
                        
                    </div>
                </x-card>
                <x-card class="mt-4 p-2 flex space-x-6">
                    <a href="/listings/{{$confection->id}}/edit">
                        <i class="fa-solid fa-pencil"></i> Edit
                    </a>
                    <form method="POST" action="/confections/{{$confection->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"> <i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </x-card>
            </div>

        </x-layout>