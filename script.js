let album = document.querySelector('.modal-form')
let open = document.querySelector('.modal-open')
let close = document.querySelector('.modal-close')

open.addEventListener('click', function(){
  album.classList.remove('hidden')
})

close.addEventListener('click', function(){
  album.classList.add('hidden')
})