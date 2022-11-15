var inputField = document.querySelectorAll('.input-field');
inputField.addEventListener('event', function() {
    if(inputField.keycode === 13 && inputField.value === '') {
        inputField.classlist.add('bounce')
    }
});



