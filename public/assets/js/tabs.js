
function showTab(tabId) {


        var tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(function (tabContent) {
            tabContent.classList.remove('active');
        });


        var selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.add('active');
        }
    }


