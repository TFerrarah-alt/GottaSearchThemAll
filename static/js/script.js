let sort = document.querySelectorAll('.input-field')
function checker () {
    for (let i = 0; i < sort.length; i++) {
        if (sort[i].value == '' || isNaN(sort[i].value)) {
        sort[i].classList.add('invalid')
        } else {
        sort[i].classList.remove('invalid')
        }
    }
    }
let btn = document.querySelector('.btn')

btn.addEventListener('click', function (event) {
    event.preventDefault()
    checker()
})

