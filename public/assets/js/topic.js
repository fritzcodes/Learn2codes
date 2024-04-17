let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.sidenav');

btn.onclick = function (event) {
    event.stopPropagation(); // Prevent click from propagating to document
    sidebar.classList.toggle('active');
};

document.addEventListener('click', function (event) {
    // Check if the click was outside the sidebar and the sidebar is active
    let isClickInside = sidebar.contains(event.target);
    let isSidebarActive = sidebar.classList.contains('active');

    if (!isClickInside && isSidebarActive) {
        sidebar.classList.remove('active'); // Use remove to ensure it closes
    }
});