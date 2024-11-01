<div class="h-full flex flex-col justify-between xs:w-full xs:p-0 sm:p-4 sm:w-1/2">
    <p class="font-bold mb-4 xs:mt-7 xs:text-lg sm:mt-0 sm:text-xl lg:text-2xl">Your tasks today</p>

    @foreach($tasks as $task)
    <div class="p-3 mb-3 border-2 rounded-lg border-slate-200">
        <div class="flex justify-between text-xs text-slate-400">
            <p>{{$task['title']}}</p>
            <p>{{$task['time']}}</p>
        </div>
        <p class="mb-2 font-bold text-base xs:text-sm sm:text-sm lg:text-sm">{{$task['description']}}</p>
        <p class="text-sm lg:text-xs sm:text-xs">{{$task['status']}}</p>
    </div>
    @endforeach

</div>