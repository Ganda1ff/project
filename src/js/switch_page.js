const links = document.querySelectorAll('.link');
let activeLink = localStorage.getItem('activeLink');

links.forEach(link => {
  if (link.getAttribute('id') === activeLink) {
    link.classList.add('activated');
  }

  link.addEventListener('click', e => {
    e.preventDefault();
    links.forEach(l => l.classList.remove('activated'));

    link.classList.add('activated');
    localStorage.setItem('activeLink', link.getAttribute('id'));
  });
});