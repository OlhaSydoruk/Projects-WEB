const buttons = document.querySelectorAll('.toggleButton');

// Проходимся по кожній кнопці і додаємо обробник події
buttons.forEach(button => {
    button.addEventListener('click', function() {

        // Знаходимо елемент second-stick всередині області кнопки
        const iconTwo = this.querySelector('.second-stick');

        // Перемикаємо клас second-stick при натисканні на кнопку
        iconTwo.style.transform = iconTwo.style.transform === 'rotate(90deg)' ? 'rotate(0deg)' : 'rotate(90deg)';
    });
});
