
let textField = document.getElementById('tag');

textField.addEventListener('keyup', function (event) {
    // console.log(event.target.value);
    // console.log(event.keyCode);

    const containerField = document.getElementById('con');
    if (event.keyCode == 13) {
        const div = document.createElement('div');
        div.classList.add('box');
        div.innerHTML = `
                <div >
                    <p >${event.target.value}</p>
                </div>
        `;

        containerField.appendChild(div);
        textField.value = ``;

    }

})

document.getElementById('con').addEventListener('click', function (event) {
    console.log(event.target);
    event.target.parentNode.removeChild(event.target);
})




