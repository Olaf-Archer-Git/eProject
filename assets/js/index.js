const button = document.getElementById('ripple');

button.addEventListener('click', function (e) {
    let x = e.clientX - e.target.offsetLeft;
    let y = e.clientY - e.target.offsetTop;

    let ripple = document.createElement('span');
    ripple.classList.add("span-ripple");
    ripple.style.left = x + 'px';
    ripple.style.top = y + 'px';
    this.appendChild(ripple);

    setTimeout(() => {
        ripple.remove()
    }, 1000);
})