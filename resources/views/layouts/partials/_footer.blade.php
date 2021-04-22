<footer>
            <p class="text-gray-500">&copy; Copyright {{ date('Y') }} 
            
            @if(! Route::is('about'))  
            &middot;<a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-700 underline">A propos de</a> 
            @endif
            </p>
        <footer>