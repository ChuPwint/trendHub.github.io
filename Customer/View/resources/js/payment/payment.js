const dynamicContent = document.getElementById('dynamicContent');
const boxes = document.querySelectorAll('.pay');

boxes.forEach(box => {
    box.addEventListener('click', () => {

        boxes.forEach(box => box.classList.remove('selected-border'));

        box.classList.add('selected-border');


        const contentElement = document.getElementById(`content-${box.id}`);
        const content = contentElement.innerText;
        

        dynamicContent.innerHTML = `<p>${content}</p>`;
    });
});