
<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit Confection
        </h2>
        <p class="mb-4">Edit: {{$confection->cname}}</p>
    </header>
    
    <form method="POST" action="/confections/{{$confections->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="mb-6">
        <label
            for="cname"
            class="inline-block text-lg mb-2"
            >Confection Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="cname" value="{{old('cname')}}"
        />
        @error('cname')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="type" class="inline-block text-lg mb-2"
            >Type</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="type"
            placeholder="Example: pie, cake etc."
            value="{{old('type')}}"
        />
        @error('type')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="prizewinning"
            class="inline-block text-lg mb-2"
            >Prize winner?</label
        >
        <input
            type="checkbox"
            name="prizewinning"
            value="1"
        />
    </div>

    <div class="mb-6">
        <label for="free" class="inline-block text-lg mb-2"
            >Free from...</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="free"
            placeholder="Example: G , L, etc.."
            value="{{old('free')}}"
        />
    </div>

    <div class="mb-6">
        <label
            for="price"
            class="inline-block text-lg mb-2"
        >
            Confection price
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="price"
            value="{{old('price')}}"
        />
        @error('price')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="unit" class="inline-block text-lg mb-2">
            Unit
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="unit"
            placeholder="Example: g, piece, etc"
            value="{{old('unit')}}"
        />
        @error('unit')
         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Update confection
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    </x-layout>