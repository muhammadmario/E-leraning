// modal image gallery
const modalButtonWrappers = document.querySelectorAll(".img-gallery");
const modalImg = document.querySelector(".modal-img");

modalButtonWrappers.forEach((e) => {
    e.onclick = function () {
        console.log("jalan");
        const src = e.getAttribute("src");
        console.log(src);
        modalImg.src = src;
    };
});
// modalButtonWrapper.onclick = function () {
//     console.log("jalan");
//     const src = modalButtonWrapper.getAttribute("src");
//     console.log(src);
//     modalImg.src = src;
// };
