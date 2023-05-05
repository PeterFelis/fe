<header>

    <div class="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class='menu'>
        <div class='logo'>
            <a href="/">
                <img src="/afbeeldingen/fetumlogo.png" alt="fetum!" />
            </a>
        </div>
        <div class='links'>
            <a href="./leveringsvoorwaarden.php">Voorwaarden</a>
            <a href="./login.php">Login</a>
            <a href="#">Blog</a>
            <a href="./contact.php">Contact</a>
            <a href="./produktenlijst.php">lijst</a>
            <a href="./products.php">produkten</a>
            <a href="./prodajax.html">ajax</a>
        </div>
    </nav>
</header>

<script>
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const menu = document.querySelector('.menu');

    hamburgerMenu.addEventListener('click', () => {
        menu.classList.toggle('show-menu');
    });
</script>