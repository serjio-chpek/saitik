function toggleDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function selectSize(size) {
    document.querySelector('.dropdown button').textContent = size;
    document.getElementById("myDropdown").classList.remove("show");
}

// Закрытие выпадающего списка, если пользователь кликнул вне него
window.onclick = function(event) {
    if (!event.target.matches('.dropdown button')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

const button = document.getElementById('showImageBtn');
    const image = document.getElementById('image');

    button.addEventListener('click', () => {
        image.style.display = 'block'; // Показать изображение
    });