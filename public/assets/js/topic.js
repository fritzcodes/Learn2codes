let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.sidenav');

btn.onclick = function (event) {
    event.stopPropagation(); // Prevent click from propagating to document
    sidebar.classList.toggle('active');
};
