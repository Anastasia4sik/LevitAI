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

//pagination
    let cardsPerPage;
    const dataContainer = document.querySelector('.catalog');

    if (dataContainer.classList.contains('exchange__container__table__catalog')) {
        cardsPerPage = 12;
    } else {
        cardsPerPage = 10;
    }

    const pagination = document.getElementById('pagination') || document.getElementById('paginationT');
    const pageNumbers = document.getElementById('page-numbers');

    const cards = Array.from(dataContainer.getElementsByClassName('catalog__block'));

    let totalPages = Math.ceil(cards.length / cardsPerPage);
    let currentPage = 1;

    function displayPage(page) {
        const startIndex = (page - 1) * cardsPerPage;
        const endIndex = startIndex + cardsPerPage;

        cards.forEach((card, index) => {
            if (index >= startIndex && index < endIndex) {
                if (dataContainer.style.display === 'block') {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'table-row';
                }
            } else {
                card.style.display = 'none';
            }
        });
    }

    function updatePagination() {
        const pageNumbers = document.getElementById('pagination') || document.getElementById('paginationT');
        pageNumbers.innerHTML = createPagination(totalPages, currentPage);
    }

    pagination.addEventListener('click', (e) => {
        if (e.target.classList.contains('numb')) {
            const page = parseInt(e.target.textContent);

            if (page !== currentPage) {
                currentPage = page;
                displayPage(currentPage);
                updatePagination();
            }
        } else if (e.target.classList.contains('prev')) {
            if (currentPage > 1) {
                currentPage--;
                displayPage(currentPage);
                updatePagination();
            }
        } else if (e.target.classList.contains('next')) {
            if (currentPage < totalPages) {
                currentPage++;
                displayPage(currentPage);
                updatePagination();
            }
        }
    });

    displayPage(currentPage);
    updatePagination();

    const element = document.querySelector(".pagination ul");

    function createPagination(totalPages, page) {
        let liTag = '';
        let active;
        let beforePage = page - 1;
        let afterPage = page + 1;

        if (beforePage < 1) {
            beforePage = 1;
        }

        if (page > 1) {
            liTag += `<li class="btn prev" onclick="createPagination(${totalPages}, ${page - 1})"><i class="fas fa-angle-left"></i> <</li>`;
        }

        if (page > 2 && totalPages > 4) {
            liTag += `<li class="first numb" onclick="createPagination(${totalPages}, 1)">1</li>`;
        }

        if (page > 3) {
            liTag += `<li class="dots"><span>...</span></li>`;
        }

        if (page == totalPages) {
            beforePage = beforePage - 2;
        } else if (page == totalPages - 1) {
            beforePage = beforePage - 1;
        }

        if (page == 1) {
            afterPage = afterPage + 2;
        } else if (page == 2) {
            afterPage = afterPage + 1;
        }

        for (let plength = beforePage; plength <= afterPage; plength++) {
            if (plength > totalPages) {
                continue;
            }

            if (plength < 1) {
                plength = 1;
            }

            if (plength == 0) {
                plength = plength + 1;
            }
            if (page == plength) {
                active = "active";
            } else {
                active = "";
            }

            liTag += `<li class="numb ${active}" onclick="createPagination(${totalPages}, ${plength})">${plength}</li>`;
        }

        if (page < totalPages - 1 && totalPages > 4) {
            if (page < totalPages - 2) {
                liTag += `<li class="dots"><span>...</span></li>`;
            }

            liTag += `<li class="last numb" onclick="createPagination(${totalPages}, ${totalPages})">${totalPages}</li>`;
        }

        if (page < totalPages) {
            liTag += `<li class="btn next" onclick="createPagination(${totalPages}, ${page + 1})">> <i class="fas fa-angle-right"></i></li>`;
        }

        return liTag;
    }
