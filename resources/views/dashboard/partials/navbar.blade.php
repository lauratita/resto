<!-- navbar -->
<div class="top-bar color-scheme-transparent">
    <div class="top-menu-controls">
        
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-outline-primary" type="submit"><i
                class="os-icon os-icon-signs-11"></i><span>
                    Logout</span></button>
        </form>
    </div>
</div>
<!--End of navbar -->
