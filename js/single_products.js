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

const openWindow = document.getElementsByClassName("action");
var i;

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

  
  const tableWindow = document.getElementsByClassName("table_title");
    var i;

    if(tableWindow !== null || tableWindow !== undefined){

    for (i = 0; i < tableWindow.length; i++) {
        tableWindow[i].addEventListener("click", function() {
    
          const tableTxt = this.nextElementSibling;
          if (tableTxt.classList.contains('hide')) {
            tableTxt.classList.remove('hide');
          } else {
            tableTxt.classList.add('hide');
          }
        });
      };
    };