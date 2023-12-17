import cleanHTML from "/assets/js/elements/cleanFromScripts.js";

(function topMenu(){
    /**классы меню верхнего уровня */
    const topMenuClass = "top-menu__list-item";
    const dropdownMenuClass = "dropdown-menu";
    const rightClass = "right";

    /**классы подменю */
    const leftClass = "left";
    const dropdownSub = "dropdown-sub";
    const dropdownSubMenu = "dropdown-sub-menu";

    /**айди элементов контейнеров <ul> */;
    const ETC = "etc";
    const menu = "menu";

    var menuInnerWidth = 0;


    //1. Получаем доступ к топ меню по айди #menu это будет элемент UL
    const menuDomElement = document.getElementById(menu);
    const etcDomElement = document.getElementById(ETC);

    if(!menuDomElement || !etcDomElement) return;

    menuInnerWidth = calculateMenuInnerWidth(menuDomElement);
    /*if(menuDomElement.offsetWidth < menuInnerWidth){*/
        shrinkMenu();
    /*}*/
        setTimeout( () => {
            growMenu();
        }, 2000);

    //3. Добавляем новую строку в дом, в список etc, в начало.
    //4. пересчитываем ширину #menu

    //5. создаем слушателя событий для resize который будет запускать логику выша, а также крутить ее в обратную сторону

    //6. обратная функция будет брать первые элеметь <li> dropdown-sub.
    //6.1 превращать все содержимое в строку.
    //6.2 удалять из ДОМ
    //6.3 в строке менять классы

    function calculateMenuInnerWidth(menuDomElement){
        //2. Бежим по li вернхнего уровня, с классом "top-menu__list-item", считаем ширину элементов в сумму
        const elements = getTopMenuElements();
        var width = 0;
        if(!elements) return;

        elements.forEach(element => {
            width += element.offsetWidth;
        });

        return width;
    }


    function getTopMenuElements(){
        const elements = menuDomElement.querySelectorAll(`.${topMenuClass}`);
        return elements;
    }

    function getEtcFirstElement(){
        /** у элемента etcDomElement получаем первый <li> элемент */
        const element = etcDomElement.querySelector(`#etc>.${dropdownSub}`);
        return element;
    }


    function growMenu(){
        const elementToMove = getEtcFirstElement();

        if(!elementToMove) return;

        const subMenuStr = switchToMain(elementToMove);
        elementToMove.remove();

        /**необходимо вставить htmlstring перед последним элементом меню, так как последний элемент меню
         * это три точки.
         */

        const lastElementInMenu = menuDomElement.lastElementChild;
        if(lastElementInMenu.dataset.menu === 'etc'){
            lastElementInMenu.insertAdjacentHTML("beforebegin", subMenuStr);
        }
    }

    //   2.1 если ширина элементов превосходит ширину #menu, то хватаем последний элемент с классом "top-menu__list-item"
    //   и превращаем  его в строку. Удаляем в дом. 
    //   2.2 меняем классы "right" и "left" и остальные
    function shrinkMenu(){
        const topElements = getTopMenuElements();
        /**-2 так как последний элемент это "etc" */
        const lastElement = topElements[topElements.length - 2];
        
        if(!lastElement) return;

        const newtopElementSTR = switchToSub(lastElement);
        lastElement.remove();

        etcDomElement.insertAdjacentHTML("afterbegin", newtopElementSTR);
    }


    function switchToMain(domElement){
        {
            const ul = domElement.querySelectorAll("ul");
            if(ul){
                for(let i = 0; i < ul.length; i++){
                    const ulElement = ul[i];
                    ulElement.classList.remove(leftClass);
                    ulElement.classList.add(rightClass);    
                }
            }
        }

        let outerHTML = cleanHTML(domElement.outerHTML);
        if(outerHTML.length === 0) return;
        /**меняем классы верхнего элемента li в меню */
        outerHTML = outerHTML.replace(dropdownSub, topMenuClass);
        /**меняем классы вложенного ul элемента */
        outerHTML = outerHTML.replace(dropdownSubMenu, dropdownMenuClass);
        return outerHTML;
    }


    function switchToSub(lastElement){
        /**меняем классы направлений право на лево */
        {
            const ul = lastElement.querySelectorAll("ul");
            if(ul){
                for(let i = 0; i < ul.length; i++){
                    const ulElement = ul[i];
                    ulElement.classList.remove(rightClass);
                    ulElement.classList.add(leftClass);    
                }
            }
        }

        let outerHTML = cleanHTML(lastElement.outerHTML);
        if(outerHTML.length === 0) return;
        /**меняем классы верхнего элемента li в меню */
        outerHTML = outerHTML.replace(topMenuClass, dropdownSub);
        /**меняем классы вложенного ul элемента */
        outerHTML = outerHTML.replaceAll(dropdownMenuClass, dropdownSubMenu);
        return outerHTML;
    }


})();