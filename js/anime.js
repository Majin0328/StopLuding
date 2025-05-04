
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate__fadeIn');
        entry.target.classList.remove('animate__hidden');
        observer.unobserve(entry.target); // Opcional: solo una vez
      }
    });
  }, {
    threshold: 0.01 // 30% del elemento visible
  });

  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    el.classList.add('animate__hidden'); // clase oculta inicial
    observer.observe(el);
  });
