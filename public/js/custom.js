const btn= document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");

btn.addEventListener("click",()=>{
    sidebar.classList.toggle("-translate-x-full")
})

var input = document.getElementById( 'image' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
    // the change event gives us the input it occurred in 
    var input = event.srcElement;
    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
    var fileName = input.files[0].name;
    // use fileName however fits your app best, i.e. add it into a div
    infoArea.textContent = 'Nama file: ' + fileName;
}

const nameTitle = document.querySelector('#name');
const slug = document.querySelector('#slug');

nameTitle.addEventListener('change',function () {
    fetch('/dashboard/checkSlug?name='+ nameTitle.value)
    .then(response => response.json())
    .then(data=> slug.value = data.slug)
})


function previewImg() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0])

    oFReader.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}















