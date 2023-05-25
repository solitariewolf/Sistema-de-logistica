const menuLinks = document.querySelectorAll('.grid-menu a');
const iframe = document.querySelector('iframe');

menuLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const url = this.getAttribute('href');
        iframe.src = url;
    });
});
