let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.sidebar');

btn.onclick = function () {
    sidebar.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', function () {
    // Attach click event listeners to each navigation link
    document.querySelectorAll('.sidebar a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the default anchor link behavior

            const contentId = this.id.replace('nav', 'content');
            showContent(contentId);

            // Highlight the active link
            document.querySelectorAll('.sidebar a', 'sidebar a:active').forEach(link => {
                link.classList.remove('active'); // Remove active class from all links
            });
            this.classList.add('active'); // Add active class to the clicked link
        });
    });
});

function showContent(contentId) {
    // Hide all content
    document.querySelectorAll('.main-content').forEach(content => {
        content.style.display = 'none';
    });

    // Show the selected content
    document.getElementById(contentId).style.display = 'block';
}