let popup = document.querySelector('#contact_form-block'); // Само окно
let openPopupButtons = document.querySelector('#contact-form-open'); // Кнопки для показа окна
let closePopupButton = document.querySelector('.btn_close_modal'); // Кнопка для скрытия окна

console.log(openPopupButtons)
openPopupButtons.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
   console.log(123)
    e.preventDefault(); // Предотвращаем дефолтное поведение браузера
    popup.classList.add('active'); // И для самого окна
})

closePopupButton.addEventListener('click',() => { // Вешаем обработчик на крестик
    popup.classList.remove('active'); // И с окна
});
