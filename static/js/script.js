let sort = document.querySelectorAll('.input-field')
function checker () {
    for (let i = 0; i < sort.length; i++) {
        if (sort[i].value == '' || isNaN(sort[i].value)) {
        sort[i].classList.add('invalid')
        } else {
        sort[i].classList.remove('invalid')
        }
    }
    let prova = document.querySelectorAll(".invalid");
    return prova.length === 0
    }

let form = document.querySelector('form')

form.addEventListener('submit', function (event) {
    if(checker() === false){
        event.preventDefault()
    }
})

