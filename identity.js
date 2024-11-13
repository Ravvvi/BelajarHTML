document.addEventListener("DOMContentLoaded", function() {
    const instagramLink = document.querySelector('a[href="https://www.instagram.com/ofofw12?igsh=MTNmeDQ0c2oxNjh0Zg=="]');
    instagramLink.addEventListener('click', function(event) {
        const confirmation = confirm("Are you sure you want to leave this page?");
        if (!confirmation) {
            event.preventDefault();
        }
    });

    const youtubeLink = document.querySelector('a[href="https://www.youtube.com/@ofo-fw124"]');
    youtubeLink.addEventListener('click', function(event) {
        const confirmation = confirm("Are you sure you want to leave this page?");
        if (!confirmation) {
            event.preventDefault(); 
        }
    });
});


sure = "if you refresh this page will restart!"
alert(sure)