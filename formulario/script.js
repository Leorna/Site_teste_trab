let textarea = document.getElementById('text-area')


if (document.readyState === 'loading')
    var count = 0


function removeImageOnClick() {
    count++

    if (count % 2 || textarea.textContent) {
        textarea.style.backgroundImage = 'url("white.png")'
        console.log(textarea.textContent)
        return
    }

    textarea.style.backgroundImage = 'url("cat.gif")'
}


textarea.addEventListener('click', removeImageOnClick)


textarea.addEventListener('keydown', () => {
    textarea.style.backgroundImage = 'url("white.png")'
    console.log(textarea.textContent)
})