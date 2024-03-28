const scriptURL = 'https://script.google.com/macros/s/AKfycbzFEWdZxMd8HbQmLnzzMj7Ki55AXwn85v7eRLGQyaucyYfbQ9kyTdDF5GCYFyGZdQXrdg/exec'

const form = document.forms['Belt Distribution']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Given input is entered to us!!! Thank You" ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})