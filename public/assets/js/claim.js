
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

        function claimBadge(index) {
            if (badges[index].percentage === '100%' && !badges[index].locked) {
                alert(`Badge ${index + 1} claimed!`);
                claimBtns[index].style.display = 'none';
                detailsBtns[index].style.display = 'block';
            } else if (badges[index].locked) {
                alert(`Badge ${index + 1} is locked. You need ${100 - parseInt(badges[index].percentage)}% more to unlock.`);
            } else {
                alert('You can only claim badges with 100% completion.');
            }
        }

        function showDetails(index) {
            if (!badges[index].locked) {
                detailsImage.src = badges[index].image;
                detailsTitle.textContent = badges[index].title;
                detailsDescription.textContent = badges[index].description;
                detailsPercentage.textContent = `Percentage: ${badges[index].percentage}`;

                badgeDetails.style.display = 'flex';
            } else {
                detailsImage.src = "question-mark.png";
                detailsTitle.textContent = badges[index].title + ' (Locked)';
                detailsDescription.textContent = `You need ${100 - parseInt(badges[index].percentage)}% more to unlock.`;
                detailsPercentage.textContent = `Percentage: ${badges[index].percentage} - Locked`;

                badgeDetails.style.display = 'flex';
            }
        }

        function closeDetails() {
            badgeDetails.style.display = 'none';
        }

        claimBtns.forEach((claimBtn, index) => {
            claimBtn.addEventListener('click', () => claimBadge(index));
        });

        detailsBtns.forEach((detailsBtn, index) => {
            detailsBtn.addEventListener('click', () => showDetails(index));
        });

        badgeContainers.forEach((badge, index) => {
            badge.addEventListener('click', () => {
                // You can add an additional behavior here if needed
            });
        });

        closeBtn.addEventListener('click', closeDetails);
    