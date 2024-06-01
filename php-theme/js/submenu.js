
const menuNode = document.querySelector('body > menu');
const submenuNode = menuNode.querySelector('.submenu');
const btnMenuNode = menuNode.querySelector('.menu > button.burger');

btnMenuNode.onclick = event => {
    menuNode.classList.toggle('open-submenu');
    btnMenuNode.classList.toggle('active');

    if (menuNode.classList.contains('open-submenu')) {
        const x=window.scrollX;
        const y=window.scrollY;
        window.onscroll=function(){window.scrollTo(x, y);};

        const cwa = document.body.clientWidth;
        document.body.style.overflow = "hidden";
        const cwl = document.body.clientWidth;

        if ( cwa < cwl ) {
            document.body.style.paddingRight = cwl - cwa + "px";
        };
    } else {
        window.onscroll=function(){};
        document.body.style.overflow = "";
        document.body.style.paddingRight = "";
    }
}

const aboutList = [
    ["О нас", ""],
    ["События", ""],
    ["Галерея", ""],
    ["Аренда", ""],
    ["Карта ТЦ", ""],
    ["Контакты", ""],
    ["Вакансии", ""],
    ["Тендеры", ""],
]

const shopList = [
    ["Все магазины", ""],
    ["Женская одежда", ""],
    ["Мужская одежда", ""],
    ["Детская одежда", ""],
    ["Детские товары", ""],
    ["Обувь", ""],
    ["Кожгалантерея", ""],
    ["Продукты", ""],
    ["Цифровая и бытовая техника", ""],
    ["Парфюмерия, косметика", ""],
    ["Ювелирные украшения", ""],
    ["Сувениры, подарки", ""],
    ["Полезное", ""],
    ["Товары для дома", ""],
    ["Спортивные товары, одежда", ""],
    ["Товары для животных", ""],
]

const cafeList = [
    ["Кафе и рестораны", ""],
    ["Рестораны быстрого обслуживания", ""],
    ["Кофейни", ""],
    ["Мороженое и десерты", ""],
]

const servicesList = [
    ["Банкоматы", ""],
    ["Салоны связи", ""],
    ["Парикмахерские", ""],
    ["Администрация", ""],
    ["Продукты", ""],
    ["Другое", ""],
]

const cornList = [
    ["Джунгли парк", ""],
    ["Мероприятия", ""],
    ["Акции", ""],
    ["Новости", ""],
]

// const blocks = [
//     // ["", aboutList, "null-list"],
//     // ["Магазины", shopList, "shop-list"],
//     // ["Кафе и рестораны", cafeList, "cafe-list"],
//     // ["Услуги и сервисы", servicesList, "service-list"],
//     // ["Развлечения", cornList, "corn-list"],
// ]

// blocks.forEach( block => {
//     let blockNode = document.createElement('div');
//     blockNode.classList.add("block", block[2])

//     if (block[0] != ""){
//         let titleNode = document.createElement('div');
//         titleNode.classList.add("title");
//         titleNode.innerText = block[0];
//         blockNode.append(titleNode);
//     }

//     block[1].forEach( point => {
//         let pointNode = document.createElement('a');
//         pointNode.href = point[1];
//         pointNode.innerText = point[0];
//         blockNode.append(pointNode)
//     })

//     submenuNode.append(blockNode)

// })





submenuNode.querySelector('.shop-list').insertAdjacentHTML('afterbegin', '<div class="title">Магазины</div>');
submenuNode.querySelector('.cafe-list').insertAdjacentHTML('afterbegin', '<div class="title">Кафе и рестораны</div>');
submenuNode.querySelector('.service-list').insertAdjacentHTML('afterbegin', '<div class="title">Услуги и сервисы</div>');
submenuNode.querySelector('.corn-list').insertAdjacentHTML('afterbegin', '<div class="title">Развлечения</div>');