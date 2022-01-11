const eventTarget = document.body

eventTarget.addEventListener("keydown", event => {
    if (event.isComposing || event.keyCode === 13) {
        document.getElementById('vraag').focus()
        return;
    }
    // do something
    });