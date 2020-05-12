
const form = document.querySelector('form')
const username = document.querySelector('#username')
const first_name = document.querySelector('#first_name')
const last_name = document.querySelector('#last_name')
const email = document.querySelector('#email')
const password = document.querySelector('#password')
const errorDisplay = document.querySelector('[data-errors]')
const errorUserName = document.querySelector('#errorUserName')
const errorFirstName = document.querySelector('#errorFirstName')


form.addEventListener('submit', (e) => {

    if (username.value.trim() == '') {
        const usererrors = ('<p class="alert-danger rounded">Please choose a username</p>')
        errorUserName.innerHTML = usererrors
        username.style.border = "1px solid red"
        username.style.background = "#4D0101"
        username.style.color = "#ffffff"
        e.preventDefault()
    }

    if (first_name.value.trim() == '') {
        const firsterrors = ('<p class="alert-danger rounded">Please provide First name</p>')
        errorFirstName.innerHTML = firsterrors
        first_name.style.border = "1px solid red"
        first_name.style.background = "#4D0101"
        first_name.style.color = "#ffffff"
        e.preventDefault()
    }
})
