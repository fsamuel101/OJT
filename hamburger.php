<div class="hamburger" onclick="toggleMenu()" id="hamburger">
    <div id="hamburger1" onclick="toggleMenu(); event.stopPropagation();"></div>
    <div id="hamburger2" onclick="toggleMenu(); event.stopPropagation();"></div>
    <div id="hamburger3" onclick="toggleMenu(); event.stopPropagation();"></div>
</div>
<div class="dropdown-menu" id="dropdownMenu">
    <form action="includes/logout.inc.php" class="hamb">
        <button class="hover">Log out</button>
        <a href="change_password.php" class="hover">Change Password</a>
        <a href="welcome.php" class="hover">See website</a>
        <!-- <a href="admin.php" class="hover">Admin Panel</a> -->
    </form>
</div>
<!-- 
<script>
        function toggleMenu() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function (event) {
            var hamburger = document.getElementById("hamburger");
            if (!event.target.closest('.hamburger') && !event.target.closest('.dropdown-menu')) {
                var dropdownMenu = document.getElementById("dropdownMenu");
                dropdownMenu.classList.remove('show');
            }
        }
    </script> -->