document.addEventListener('DOMContentLoaded', function() {
  window.addEventListener('scroll', function() {
    const scroll = window.pageYOffset;
    const parallax = document.querySelector('.parallax-bg');
    if (parallax) {
      parallax.style.transform = 'translateY(' + scroll * 0.3 + 'px)';
    }
  });

  const counters = document.querySelectorAll('.count');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const update = () => {
          const target = +el.getAttribute('data-target');
          const current = +el.innerText;
          const increment = Math.ceil(target / 40);
          if (current < target) {
            el.innerText = Math.min(current + increment, target);
            setTimeout(update, 30);
          }
        };
        update();
        observer.unobserve(el);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(counter => observer.observe(counter));

  const fadeEls = document.querySelectorAll('.fade-in');
  const fadeObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  fadeEls.forEach(el => fadeObserver.observe(el));

  const topBtn = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) topBtn.classList.add('show');
    else topBtn.classList.remove('show');
  });
  topBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  // Services by Sector
  if (typeof Chart !== 'undefined') {
    const ctx1 = document.getElementById('sectorChart').getContext('2d');
    new Chart(ctx1, {
      type: 'doughnut',
      data: {
        labels: ['Food Distribution', 'Mental Health', 'Emergency Response', 'Housing', 'Other'],
        datasets: [{
          data: [40, 20, 25, 10, 5],
          backgroundColor: ['#E91E63', '#9C27B0', '#03A9F4', '#FF9800', '#BDBDBD']
        }]
      },
      options: {
        responsive: true,
        animation: {
          animateRotate: true,
          animateScale: true
        },
        plugins: {
          legend: { position: 'bottom' }
        }
      }
    });
  }

  // First Contact Sources
  if (typeof Chart !== 'undefined') {
    const ctx2 = document.getElementById('accessChart').getContext('2d');
    new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['School Counselors', 'Churches', 'Local Nonprofits', 'Social Media', 'Don\u2019t Know'],
        datasets: [{
          label: 'Percent',
          data: [35, 25, 20, 10, 10],
          backgroundColor: ['#4CAF50', '#FFC107', '#2196F3', '#FF5722', '#9E9E9E']
        }]
      },
      options: {
        indexAxis: 'y',
        responsive: true,
        animation: {
          duration: 1200,
          easing: 'easeOutQuart'
        },
        plugins: {
          legend: { display: false }
        }
      }
    });
  }
});
