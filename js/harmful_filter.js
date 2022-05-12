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
const minFilter = document.querySelector('.minFilter-title');
minFilter.addEventListener('click', () => {
filters.classList.toggle('scaleX');
});

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
  document.getElementById('block_card').innerHTML = goods.map(n => `
  <a href="harmful_object_single_page.php?single_hurmful_id=${n.id}" class="kitchen_card" data-art="${n.name}">
    <div class="kitchen_card"> 
      <img src="${n.image}">

      <div>
      <h5>${n.title}</h5>
      <h6>${n.sub_title}</h6>
      <p>${n.type}</p>
       </div>
      </div>
      </a>
     
      
      
   
  `).join('');
}

outputGoods(filter);