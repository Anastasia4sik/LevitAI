// header
const dropdowns = document.querySelectorAll(".header__dropdown");

dropdowns.forEach((dropdown) => {
    const dropdownOptions = dropdown.querySelector(".header__dropdown__options");

    dropdown.addEventListener("mouseenter", function() {
        dropdownOptions.classList.add("open");
    });

    dropdown.addEventListener("mouseleave", function() {
        dropdownOptions.classList.remove("open");
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // ShowMore/ShowLess
    const blocks = document.querySelectorAll('.market__table__body__row--hide');

    blocks.forEach((block) => {
        const button = document.querySelector('.market__btn');

        button.addEventListener('click', function() {
            if (block.style.display != 'table-row') {
                block.style.display = 'table-row';

                button.innerHTML = 'Show less <img src="src/img/icons/arrows/arrow-up.svg" alt="Show less">';
            } else {
                block.style.display = 'none';

                button.innerHTML = 'Show more <img src="src/img/icons/arrows/arrow-down.svg" alt="Show more">';
            }
        });
    });

    //qna
    const qnaBtns = document.querySelectorAll('.qna__block__content__btns__item');

    const listItems = document.querySelectorAll('.qna__block__content__list__group')

    qnaBtns.forEach((button) => {
        button.addEventListener('click', function() {
            qnaBtns.forEach((btn) => {
                btn.classList.remove('active')
            });

            button.classList.add('active');


            listItems.forEach((item) => {
                const categoryClass = 'qna__block__content__list--' + button.id.toLowerCase();

                if (item.classList.contains(categoryClass)) {
                    item.style.display = 'block';

                    setTimeout(() => {
                        item.style.transform = 'translateX(0)';
                        item.style.opacity = '1';
                    }, 50);
                } else {
                    item.style.display = 'none';
                    item.style.transform = 'translateX(100%)';
                    item.style.opacity = '0';
                }
            });
        })
    })
});

//menu dropdown
const menulist = document.querySelectorAll(".menu__container__list__item__select");

menulist.forEach((menuitem) => {
    const menulistOption = menuitem.querySelector(".menu__container__list__item__select__options");

    menuitem.addEventListener("click", function() {
        if (menulistOption?.classList.contains("open")) {
            menulistOption.classList.remove("open");
        } else {
            menulistOption.classList.add("open");
        }
    });
});

//menu visible
const menuOpenBtn = document.querySelector(".menu__main__btn");
const menuCloseBtn = document.querySelector(".menu__container__btn");
const menuContainer = document.querySelector(".menu__container");

menuOpenBtn.addEventListener("click", function() {
    menuContainer.style.transform = "translateX(0)";
})

menuOpenBtn.addEventListener("mouseenter", function() {
    menuOpenBtn.style.opacity = "0.6";

    setTimeout(() => {
        menuOpenBtn.style.opacity = "1";
        menuOpenBtn.src = 'src/img/icons/sidemenu/menu-hover.svg';
    }, 300);

})

menuOpenBtn.addEventListener("mouseleave", function() {
    menuOpenBtn.style.opacity = "0.6";

    setTimeout(() => {
        menuOpenBtn.style.opacity = "1";
        menuOpenBtn.src = 'src/img/icons/sidemenu/menu.svg';
    }, 300);

})

menuCloseBtn.addEventListener("click", function() {
    menuContainer.style.transform = "translateX(-100%)";
})
