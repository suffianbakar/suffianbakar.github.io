function filterProjects(status) {
        const cards = document.querySelectorAll('.project-card');

        cards.forEach(card => {
            const cardStatus = card.getAttribute('data-status');

            if (status === 'all' || cardStatus === status) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    window.addEventListener('load', function() {
  const preloader = document.getElementById('preloader');
  
  // Add the fade-out class
  preloader.classList.add('fade-out');
  
  // Optional: Remove it from the DOM entirely after the transition
  setTimeout(() => {
    preloader.style.display = 'none';
  }, 500); 
});

// 1. Bila page dah siap load, hilangkan loader (macam biasa)
window.addEventListener('load', () => {
  const preloader = document.getElementById('preloader');
  preloader.classList.add('fade-out');
});

// 2. Bila user klik mana-mana link
document.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', function(e) {
    
    // Pastikan link tu bukan link yang buka tab baru atau link ke section yang sama (#)
    if (this.hostname === window.location.hostname && !this.hash && this.target !== "_blank") {
      
      e.preventDefault(); // Stop sekejap browser dari terus tukar page
      const destination = this.href;
      
      const preloader = document.getElementById('preloader');
      preloader.classList.remove('fade-out'); // Tunjukkan balik loader
      preloader.classList.add('show');

      // Lepas 500ms (masa untuk animation), baru pergi ke page baru
      setTimeout(() => {
        window.location.href = destination;
      }, 500); 
    }
  });
});