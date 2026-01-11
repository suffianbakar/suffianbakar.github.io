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

