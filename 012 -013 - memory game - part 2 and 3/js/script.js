const game = document.getElementById('game')

const grid = document.createElement('section')
grid.setAttribute('class', 'grid')

game.appendChild(grid);

// For each item in the cardsArray array...
cardsArray.forEach(item => {
  // Create a div
  const card = document.createElement('div')

  // Apply a card class to that div
  card.classList.add('card')

  // Set the data-name attribute of the div to the cardsArray name
  card.dataset.name = item.name

  // Apply the background image of the div to the cardsArray image
  card.style.backgroundImage = `url(${item.img})`

  // Append the div to the grid section
  grid.appendChild(card)
})