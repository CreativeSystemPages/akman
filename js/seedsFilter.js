const OpenFilterItem = event => {
    const filters = document.querySelector('.filters');
    const filterItem = filters.querySelectorAll('.filter_item');
    const target = event.target.nextElementSibling
    target.classList.toggle('hide');

    filterItem.forEach(item => {
        if(item !==target){
            item.classList.add('hide');
        }
    });
}

document.querySelectorAll('.filters_title').forEach(item => {
    item.addEventListener('click', OpenFilterItem);
});


const filters = document.querySelector('#filters');

filters.addEventListener('input', filterGoods);

function filterGoods() {
const culture = [...filters.querySelectorAll('#culture input:checked')].map(n => n.value);

const type = [...filters.querySelectorAll('#type input:checked')].map(n => n.value);
console.log(type)


  outputGoods(filter.filter(n => (
    (!type.length || type.includes(n.type)) && 
    (!culture.length || culture.includes(n.culture))
  )));
}


function outputGoods(goods) {
  document.getElementById('filter_card').innerHTML = goods.map(n => `
    <div class="single-goods card">
      <img src="${n.title}">
      <div class ="card_subtitle">
     <h5>${n.sub_title}</h5>
     <h6>${n.Term}</h6>
     <p>${n.culture}</p>
      </div>
      <a href="single_page_seeds.php?seeds_id=${n.id}" class="add-to-cart">Подробнее</a>
    </div>
  `).join('');
}

outputGoods(filter);

const openWindow = document.getElementsByClassName("action");
var i;
console.log(openWindow);
for (i = 0; i < openWindow.length; i++) {
    openWindow[i].addEventListener("click", function() {

      const actionTxt = this.nextElementSibling;
      if (actionTxt.classList.contains('hide')) {
        actionTxt.classList.remove('hide');
      } else {
        actionTxt.classList.add('hide');
      }
    });
  };













