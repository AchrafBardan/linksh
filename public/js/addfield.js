let linkname = document.getElementById('linkname');
let btnlinkname = document.getElementById('btnlinkname');
let textField = document.getElementById('textField');


function showField() {
    linkname.classList.toggle('hidden')
    if (linkname.classList.contains('hidden')) {
        textField.innerHTML = 'Custom link';
    } else {
        textField.innerHTML = 'Delete custom link';
        linkname.value = '';
    }

}