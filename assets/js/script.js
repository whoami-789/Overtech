const headerElement = document.querySelector('#header')
const burgerElement = document.querySelector('.header-mobile__burger')

burgerElement.addEventListener('click', () => {
    document.querySelector('.header-mobile').classList.toggle('is-active')
})

const highlightHeader = (prop) => {
    const currentPosition = window.pageYOffset

    currentPosition >= 50 ? headerElement.classList.add('is-active') : headerElement.classList.remove('is-active')
}

window.addEventListener('scroll', highlightHeader)
window.addEventListener('load', highlightHeader)