<li class="flex items-start space-x-4 py-6">
    <img src="{{$image}}"
         alt="IMAGE DO {{$name}}"
         class="h-20 w-20 flex-none rounded-md object-cover object-center">
    <div class="flex-auto space-y-1">
        <h3 class="text-white">{{$name }}</h3>
        @foreach($features as $feature)
            <p class="text-primary-200">{{$feature}}</p>
        @endforeach
    </div>
    <div class="flex-col">
        <p class="flex-none text-base font-medium text-secondary-300">@money($price)</p>
        <span class="font-medium text-white-400">x {{$quantity}}</span>
    </div>
</li>
