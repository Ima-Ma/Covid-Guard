let btn = document.getElementById('add_btn');
btn.addEventListener('click' , addFood);
function addFood(e){
    let currentBtn = e.currentTarget;
    console.log(currentBtn);
    let currentInput = currentBtn.previousElementSibling;
    console.log(currentInput.value);
    let currentFoodName = currentInput.value;
    let newLi = document.createElement('li');
    newLi.className = `list-group-item d-flex justify-content-between my-1`;
    newLi.innerHTML =`
                <p>${currentFoodName}</p>
                <h2 id="btn1" class="text-primary" onclick="removeFood(this)"><i class="float-right fa-solid fa-x"></i></h2>
    
    `
    let parentList = document.getElementById('parentList');
    parentList.appendChild(newLi);
    if(btn.click){
        currentInput.value = "";
    }
  
}
function removeFood(currentElement){
    currentElement.parentElement.remove()
}