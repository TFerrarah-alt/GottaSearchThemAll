input= document.querySelectorAll('input-field')
input.addEventListener('ch', function(){
    if(input.value.length > 0){
    console.log('change')
    }
})