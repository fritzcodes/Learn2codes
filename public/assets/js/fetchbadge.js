const imageUrlsTab1 = [
  'assets/images/java.png',
  'assets/images/php.png',
  'assets/images/Phyton.png',
  'assets/images/c_sharp.png',
  'assets/images/c.png',
  'assets/images/Complete.png'
];

const imageUrlsTab2 = [
  'assets/images/java.png',
  'assets/images/php.png',
  'assets/images/Phyton.png',
  'assets/images/c_sharp.png',
  'assets/images/c.png',
  'assets/images/Complete.png'
];

const imageUrlsTab3 = [
  'assets/images/c.png',
  'assets/images/Complete.png',
  'assets/images/java.png',
  'assets/images/php.png',
  'assets/images/c_sharp.png',
  'assets/images/Phyton.png'
];

const badgePercentages = [100, 100, 100, 100, 10, 0]; // Example percentage values for each badge
const badgePercentagesTab3 = [50, 75, 20, 90, 30, 10]; // Example percentage values for tab 3 badges

const fetchAndDisplayImages = () => {
  const tabs = ['tab1', 'tab2', 'tab3'];

  tabs.forEach((tab) => {
    const containers = document.querySelectorAll(`#${tab} .image-container`);
    let currentImageUrls;
    let currentBadgePercentages;

    if (tab === 'tab1') {
      currentImageUrls = imageUrlsTab1;
      currentBadgePercentages = badgePercentages;
    } else if (tab === 'tab2') {
      currentImageUrls = imageUrlsTab2;
      currentBadgePercentages = badgePercentages;
    } else if (tab === 'tab3') {
      currentImageUrls = imageUrlsTab3;
      currentBadgePercentages = badgePercentagesTab3;
    }

    containers.forEach((container, index) => {
      const img = new Image();
      img.src = currentImageUrls[index];
      img.classList.add('image');

      // Check if the badge is claimed based on the percentage
      const isClaimed = currentBadgePercentages[index] === 100;

      if (isClaimed) {
        container.classList.add('claimed'); // Add a class for claimed badges
      } else {
        container.classList.add('not-claimed'); // Add a class for not claimed badges
      }

      // Add event listeners
      container.addEventListener('mouseover', () => {
        if (isClaimed) {
          container.setAttribute('title', 'Badge Earned');
        }
      });

      container.addEventListener('click', () => {
        if (tab === 'tab2') {
          // For tab 2 (Claimed), do nothing on click
        } else if (tab === 'tab3' && !isClaimed) {
          alert('This badge is not claimed. Please finish a certain task or claim it and go to collection section if it is claimable.');
        } else if (tab === 'tab1') {
          if (isClaimed) {
            alert('This badge is claimed.');
          } else {
              alert('This badge is not claimed. Please finish a certain task or claim it and go to collection section if it is claimable.');
          }
        }
      });

      container.appendChild(img);
    });
  });
};

window.onload = () => {
  setTimeout(fetchAndDisplayImages, 1600);
};
