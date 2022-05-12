const filterSearchCatalog = document.getElementById('catalog');
const filterSearchBack = document.getElementById('return');
const burgerSubMenu = document.querySelector('.burger__sub-menu');

const filterSearchHurmful = document.getElementById('hurm_obj');
const burgerSubMenuHurmful = document.getElementById('asd');
const filterSearchBackHurmful = document.getElementById('returnHurmful');

const filterSearchCulture = document.getElementById('cult');
const filterSearchBackCulture = document.getElementById('returnCulture');
const burgerSubMenuCult = document.querySelector('.cult');

filterSearchCulture.addEventListener('click', () => {
  burgerSubMenuCult.classList.remove('hide');
});

filterSearchBackCulture.addEventListener('click', () => {
  burgerSubMenuCult.classList.add('hide');});


filterSearchHurmful.addEventListener('click', () => {
  burgerSubMenuHurmful.classList.remove('hide');
});

filterSearchBackHurmful.addEventListener('click', () => {
  burgerSubMenuHurmful.classList.add('hide');});



filterSearchCatalog.addEventListener('click', () =>{
  console.log(burgerSubMenu);
  burgerSubMenu.classList.remove('hide');
});

filterSearchBack.addEventListener('click', ()=>{
  burgerSubMenu.classList.add('hide');
});

const openFilter = document.getElementsByClassName("filters_title");

for (let i = 0; i < openFilter.length; i++) {
  openFilter[i].addEventListener("click", function () {

    const actionTxt = this.nextElementSibling;
    if (actionTxt.classList.contains('hide')) {
      actionTxt.classList.remove('hide');
    } else {
      actionTxt.classList.add('hide');
    }
  });
};

const filters = document.querySelector('#filters');
const minFilter = document.querySelector('.minFilter-title');
minFilter.addEventListener('click', () => {
  filters.classList.toggle('scaleX');
})


filters.addEventListener('input', filterGoods);
const culture = [...filters.querySelectorAll('#culture input:checked')];
const type = [...filters.querySelectorAll('#type input:checked')];

function filterGoods() {
  const culture = [...filters.querySelectorAll('#culture input:checked')].map(n => n.value);

  const type = [...filters.querySelectorAll('#type input:checked')].map(n => n.value);

  outputGoods(filter.filter(n => (
    (!type.length || type.includes(n.type)) &&
    (!culture.length || culture.includes(n.culture))
  )));
};



const location1 = window.location;
let params = new URLSearchParams(location.search);
console.log(location1);

if (location1.href === 'http://akman/sredstva_zachity_rastenyi.php?protravitel=1') {
  setTimeout(() => {
    type[0] = "Протравитель";
    outputGoods(filter.filter(n => (
      (!type.length || type.includes(n.type)) &&
      (!culture.length || culture.includes(n.culture))
    )));
    console.log(type)
    checks.checked = true;
  }, 3)
}

function outputGoods(goods) {
  document.getElementById('filter_card').innerHTML = goods.map(n => `
  <div class="single-goods card">
      <img src="${n.title}">
      <div class ="card_subtitle">
     <h5>${n.sub_title}</h5>
     <h6>${n.active_substance}</h6>
     <p>${n.type}</p>
      </div>
      <a href="simple_page_products.php?category_id=${n.id}"  class="add-to-cart" data-art="${n.name}">Подробнее</a>
    </div>
    
  `).join('');
};

outputGoods(filter);


const checks = document.getElementById('protravitel');

function Checks() {

  if (checks.checked) {
    params.set('protravitel', 1);
    window.history.replaceState({}, '', `${location.pathname}?${params}`);
    console.log(window.location)
    console.log('true')
  } else {
    checks.checked = false;
  }
};

Checks();
































