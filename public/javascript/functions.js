// VARIABLES

var mobile_menu = document.querySelector('.material-symbols-outlined');
var body = document.body;

var mobile_menu_items = document.querySelector('.menu_nav-mobile-items');

// FUNCTIONS
function toggleClass (element, class_removed){
    element.classList.toggle(class_removed);
}


// EVENTS
mobile_menu.addEventListener('click', function(){
    console.log("hola");
    toggleClass(mobile_menu_items, 'invisible');
    toggleClass(body, 'overflow_hidden')
});