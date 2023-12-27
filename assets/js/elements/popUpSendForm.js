export default async function popUpSendForm(selector, buttonSelector){
    const backButton = document.querySelector(".header__contacts_backbutton");
    const element = document.querySelector(selector);
    /**получаем кнопку */
    const button = document.querySelector(buttonSelector);

    /**проверяем есть ли элемент */
    if(!element || !button || !backButton ) return;

    button.addEventListener('click', () => {
        //element.style.display = 'block';
        element.classList.add('active');
    });

    backButton.addEventListener('click', closeWindow);
    element.addEventListener('click', (event) => {
        if(event.target === element){
            closeWindow();
        }
    });

    function closeWindow(){
        element.classList.remove('active');
        element.style.transform = 'scale(1)';
        setTimeout(() => element.style.transform = '', 400);
    }
};