<header class="flex justify-between items-center py-2 px-8">
    <div class="flex items-center">
        <h1 class="text-2xl font-extralight">Post Management System</h1> 
    </div>
    <div class="flex items-center">
        <a class="" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
        >Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </div>
</header>
<nav class="bg-white">
    <div class="p-4 space-y-3">
        <div class="flex flex-auto justify-between px-4">
            <div>
                <h1 class="text-xl font-medium">
                    <span>Hi {{ Auth::user()->name }}</span>
                </h1>
                <h1 class="text-sm font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, minima!</h1>
            </div>
        </div>
    </div>
    <ul class="post-nav border-b border-gray-200 flex item-center px-8 mt-4">
        <li class="font-semibold">
            <a href="{{ route('post.index') }}" class="nav-module items-center aes">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="ml-1">Home</span>
            </a>
        </li>
        <li class="font-semibold">
            <a href="{{ route('posted.index') }}" class="nav-module items-center aes">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <span class="ml-1">Post</span>
            </a>
        </li>
        <li class="font-semibold">
            <a href="{{ route('unarchive.index') }}" class="nav-module items-center aes">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                </svg>
                <span class="ml-1">Archived</span>
            </a>
        </li>
    </ul>
</nav>
