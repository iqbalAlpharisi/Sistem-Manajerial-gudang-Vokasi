// JavaScript to handle modal functionality
const modal = document.getElementById('myModal');
const openModalButton = document.getElementById('openModalButton');
const closeModalButton = document.getElementById('closeModalButton');

// Open modal
openModalButton.addEventListener('click', function () {
  modal.classList.remove('hidden');
});

// Close modal
closeModalButton.addEventListener('click', function () {
  modal.classList.add('hidden');
});

// Close modal when clicking outside of it
window.addEventListener('click', function (event) {
  if (event.target === modal) {
    modal.classList.add('hidden');
  }
});