<div class="mx-auto bg-primary d-flex justify-content-evenly align-items-center text-white fs-4 rounded-top position-fixed bottom-0 start-0 end-0 z-3"
    style="max-width: 600px; height: 56px">
    <div><a class="text-white" href="/categories/create">
            @if ($title == 'Category')
                <i class="bi bi-bookmarks-fill"></i>
            @else
                <i class="bi bi-bookmarks"></i>
            @endif
        </a></div>
    <div><a class="text-white" href="/create">
            @if ($title == 'Create')
                <i class="bi bi-plus-circle-fill fs-1"></i>
            @else
                <i class="bi bi-plus-circle fs-1"></i>
            @endif
        </a></div>
    <div><a class="text-white" href="/user"><i class="bi bi-person"></i></a></div>
</div>
