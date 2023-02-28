window.addEventListener('load', function () {
  const topHeader = document.getElementById('top-header');
  const mainHeader = document.getElementById('main-header');

  window.addEventListener('scroll', function () {
    if (window.scrollY >= 267 && topHeader.className !== 'et-fixed-header') {
      topHeader.classList.add('et-fixed-header');
      mainHeader.classList.add('et-fixed-header');
    }

    if (window.scrollY < 267 && topHeader.className === 'et-fixed-header') {
      topHeader.classList.remove('et-fixed-header');
      mainHeader.classList.remove('et-fixed-header');
    }
  });
});
