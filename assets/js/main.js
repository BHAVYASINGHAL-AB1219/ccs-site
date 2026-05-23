// Mobile nav
document.querySelector('.nav-toggle')?.addEventListener('click', () => {
  document.querySelector('.nav-links')?.classList.toggle('open');
});

// Reveal on scroll
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));

// Gallery filter + lightbox
const chips = document.querySelectorAll('.chip');
const items = document.querySelectorAll('.gal-item');
chips.forEach(c => c.addEventListener('click', () => {
  chips.forEach(x => x.classList.remove('active'));
  c.classList.add('active');
  const f = c.dataset.filter;
  items.forEach(i => {
    i.style.display = (f === 'all' || i.dataset.event === f) ? '' : 'none';
  });
}));

const lb = document.querySelector('.lightbox');
if (lb) {
  const lbImg = lb.querySelector('img');
  items.forEach(i => i.addEventListener('click', () => {
    lbImg.src = i.querySelector('img').src;
    lb.classList.add('open');
  }));
  lb.addEventListener('click', () => lb.classList.remove('open'));
}

// Marquee duplicate for seamless loop
document.querySelectorAll('.marquee-track').forEach(t => {
  t.innerHTML += t.innerHTML;
});
