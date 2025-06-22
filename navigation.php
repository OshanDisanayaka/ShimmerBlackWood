<style>
    @import url('https://fonts.googleapis.com/css2?family=Aclonica&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');

    .hover {
        transition-duration: 0.4s;
    }

    .hover:hover {
        background-color: #020b3b;
    }

    .BgColour {
        background-color: #aa7938;
        opacity: 0.9;
    }
</style>

<script>
    function scrollValue() {
        var navbar = document.getElementById('navbar');
        var scroll = window.scrollY;
        if (scroll < 400) {
            navbar.classList.remove('BgColour');
        } else {
            navbar.classList.add('BgColour');
        }
    }

    window.addEventListener('scroll', scrollValue);
</script>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bgcolor" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-family: 'Aclonica', sans-serif; font-size: 25px; color: #020b3b;">Shimmer Blackwood</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link px-4 hover" href="index.php" style="color: white; font-family: 'Abel', sans-serif; font-size: 17px; border-radius: 15px;">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 hover" href="aboutus.php" style="color: white; font-family: 'Abel', sans-serif; font-size: 17px; border-radius: 15px;">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 hover" href="services.php" style="color: white; font-family: 'Abel', sans-serif; font-size: 17px; border-radius: 15px;">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 hover" href="contactus.php" style="color: white; font-family: 'Abel', sans-serif; font-size: 17px; border-radius: 15px;">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>