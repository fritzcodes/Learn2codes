
const badges = [
    {
        title: "Java Quiz Rookie",
        description: "Act as motivational incentives, encouraging players to explore different aspects of the game, excel in their skills, or engage in specific quests or missions.",
        percentage: "100%",
        image: "assets/java.png",
    },
    {
        title: "Php Quiz Rookie",
        description: "Badge celebrates daring adventurers navigating unknown realms, unlocking exclusive quests, and gaining prestige among fellow explorers.",
        percentage: "100%",
        image: "assets/php.png",
    },
    {
        title: "C# Quiz Rookie",
        description: "Signifies unparalleled programming expertise, innovation, and problem-solving prowess.",
        percentage: "100%",
        image: "assets/c_sharp.png",
    },
    {
        title: "Phyton Quiz Rookie",
        description: "Act as motivational incentives, encouraging players to explore different aspects of the game, excel in their skills, or engage in specific quests or missions.",
        percentage: "100%",
        image: "assets/Phyton.png",

    },
    {
        title: "C Quiz Rookie ",
        description: "Badge celebrates daring adventurers navigating unknown realms, unlocking exclusive quests, and gaining prestige among fellow explorers.",
        percentage: "90%",
        image: "assets/c.png",
        locked: true,
    },
    {
        title: "COMPLETE BADGE",
        description: "Signifies unparalleled programming expertise, innovation, and problem-solving prowess.",
        percentage: "60%",
        image: "assets/Complete.png",
        locked: true,
    },
];

const badgeContainers = document.querySelectorAll('.badge');
const badgeDetails = document.querySelector('.badge-details');
const detailsImage = document.querySelector('.details-image');
const detailsTitle = document.querySelector('.details-title');
const detailsDescription = document.querySelector('.details-description');
const detailsPercentage = document.querySelector('.details-percentage');
const closeBtn = document.querySelector('.close-btn');
const claimBtns = document.querySelectorAll('.claim-btn');
const detailsBtns = document.querySelectorAll('.details-btn');

function claimBadge(index, id, language) {

    if (index >= '100') {
        $.ajax({
            url: '/updateBadge',
            dataType: 'json',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                user_id: id,
                language: language
            },
            success: function (data) {
                console.log(data);
                Swal.fire({
                    icon: 'success',
                    title: 'Congratulations!',
                    text: `You've successfully claimed a badge.`
                }).then(() => {
                    location.reload();
                })
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        })


    } else {
        Swal.fire({
            icon: 'warning',
            text: 'You can only claim badges with 100% completion.'
        })

    }
}

function showDetails(pic, language) {
    console.log("pix",language);
    detailsImage.src = `/images/${pic}`;
    detailsTitle.textContent = language;
    // detailsDescription.textContent = badges[index].description;
    // detailsPercentage.textContent = `Percentage: ${badges[index].percentage}`;

    badgeDetails.style.display = 'flex';

}

function closeDetails() {
    badgeDetails.style.display = 'none';
}




badgeContainers.forEach((badge, index) => {
    badge.addEventListener('click', () => {
        // You can add an additional behavior here if needed
    });
});

closeBtn.addEventListener('click', closeDetails);
