<!-- Core JS -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>
<script src="../assets/js/main.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" crossorigin="anonymous"></script>
<!-- nav-link active -->
<script>
    const sidebarMenus = document.querySelectorAll('.menu-item');
    sidebarMenus.forEach((item) => {
        let currentUrl = window.location.href;
        currentUrl = currentUrl.split('?')[0];
        if (item.querySelector('a').href == currentUrl) {
            item.classList.add('active');
        }

        if (item.querySelector('ul')) {
            item.querySelector('ul').querySelectorAll('li').forEach((childItem) => {
                if (childItem.querySelector('a').href == currentUrl) {
                    item.classList.add('active');
                    item.classList.add('open');
                }
            });
        }
    });
</script>