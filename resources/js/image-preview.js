
const placeholder = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/330px-No-Image-Placeholder.svg.png?20200912122019';
const imageField = document.getElementById('image-field')
const preview = document.getElementById('preview')

imageField.addEventListener('input', () => {

    preview.src = imageField.value ?? placeholder;
})