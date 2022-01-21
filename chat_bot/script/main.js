const eventTarget = document.body

eventTarget.addEventListener("keydown", event => {
    if (event.isComposing || event.keyCode === 13) {
        document.getElementById('vraag').focus()
        return;
    }
    // do something
});

function myFunction() {
    if (document.getElementById("vraag").value == '/staff') {
        document.getElementById('send').hidden = true;
        document.getElementById('send2').removeAttribute("hidden");

    }
}
