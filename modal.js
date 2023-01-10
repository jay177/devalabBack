
var openModalBtn = document.getElementById("open-modal-btn");
var modal = document.getElementById("modal");
var closeModalBtn = document.getElementById("close-modal-btn");


openModalBtn.addEventListener("click", function(){
  modal.style.display = "block";
});


closeModalBtn.addEventListener("click", function(){
  modal.style.display = "none";
});


modal.addEventListener("click", function(event){
  if(event.target === modal) {
    modal.style.display = "none";
  }
});
