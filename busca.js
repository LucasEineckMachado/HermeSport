//get filter element
const filterElement = document.querySelector('.input-wrapper input')
//get cards elements
const cards = document.querySelectorAll('.produto-item')

// add input event for the filter element
filterElement.addEventListener('input', filterCards)

//filter function
function filterCards() {
//if the filter is not empty
if(filterElement.value != ''){
// for each card of cards
for (let card of cards) {
    //get card heading
    let title = card.querySelector('.produto-item--name')
    //transform to lower case
    title = title.textContent.toLowerCase()
    // transform filter text to lower case
    let filterText = filterElement.value.toLowerCase()
    // if card title doesn't include the filter text
    if(!title.includes(filterText)) {
    // hide the card element
    card.style.display = "none"
    }
    else{
        // unhude the card element
        card.style.display = "block"
    }
}
} else {
    //for each card of cards
    for (let card of cards){
        card.style.display = "block"
    }
}
}