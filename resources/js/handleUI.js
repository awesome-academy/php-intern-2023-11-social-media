var nav = document.querySelector('.app__nav')
var header = document.querySelector('.app__header')
var container = document.querySelector('.app__container')

container.style.height = `calc(100vh - ${nav.clientHeight}px - ${header.clientHeight}px - 2rem)`

window.addEventListener('resize', function () {
    container.style.height = `calc(100vh - ${nav.clientHeight}px - ${header.clientHeight}px - 2rem)`
});
