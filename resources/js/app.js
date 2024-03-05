require('./prism');

selectNavigationItem = (el) => {  dom_els(el).forEach(element => {
    element.classList.add("active");
});}
