<div>
    <div class="container-fluid px-0 py-4 bg-white w-100 position-fixed navbar">
        <div class="row w-100">
            <div class="co;-6 px-5">
                <div class="d-inllne-block cursor-point" onclick="window.location = '{{ route("home") }}'">
                    <img src="{{ asset('img/logo.png') }}" class="d-inline-block" width="46px" alt="Logo">
                    <h4 class="viga d-inline-block position-relative ml-3 d-md-inline-block d-none" style="top: 5px; left: 10px">Lelangind</h4>
                </div>
            </div>
            <div class="col-6 px-5 text-right">
                <div class="burger d-inline-block cursor-point" onclick="toggleNavbar()">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-fixed position-fixed">

    </div>
</div>

<script>
    function toggleNavbar() {
        $('.burger').toggleClass('times')
        if($('.burger').hasClass('times')) {

        }
    }
</script>
