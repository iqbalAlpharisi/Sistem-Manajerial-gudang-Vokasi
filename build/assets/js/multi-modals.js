    // JavaScript to handle modal functionality
    document.querySelectorAll('[data-modal-target]').forEach(function (button) {
        button.addEventListener('click', function () {
          const targetModal = document.querySelector(this.getAttribute('data-modal-target'));
          targetModal.classList.remove('hidden');
        });
      });
  
      document.querySelectorAll('[data-modal-close]').forEach(function (button) {
        button.addEventListener('click', function () {
          const targetModal = document.querySelector(this.getAttribute('data-modal-close'));
          targetModal.classList.add('hidden');
        });
      });
  
      window.addEventListener('click', function (event) {
        document.querySelectorAll('.modal').forEach(function (modal) {
          if (event.target === modal) {
            modal.classList.add('hidden');
          }
        });
      });