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