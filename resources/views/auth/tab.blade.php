<ul class="flex mb-5">
    <li class="flex-1 mr-2">
        <a class="text-center block border {{ (Route::current()->getName()==='/' || Route::current()->getName()==='login' ) ? 'border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white' : 'border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4' }}"
            href="{{ route('login') }}">Admin</a>
    </li>
    <li class="flex-1 mr-2">
        <a class="text-center block border {{ Route::current()->getName()==='login.teacher' ? 'border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white' : 'border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4' }}"
            href="{{ route('login.teacher') }}">Teacher</a>
    </li>
    <li class="flex-1">
        <a class="text-center block border {{ Route::current()->getName()==='login.student' ? 'border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white' : 'border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4' }}"
            href="{{ route('login.student') }}">Student</a>
    </li>
</ul>
