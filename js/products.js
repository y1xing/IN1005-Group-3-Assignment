const openBtn = document.getElementById("open");
const toast = document.getElementById("toast-container");
const closeBtn = document.getElementById("close");

openBtn.addEventListener("click", () => {
    console.log("clicked");
    toast.classList.add("actives");
    setTimeout(()=> {
        toast.classList.remove("actives");
    }, 5000)
})
//
// closeBtn.addEventListener("click", ()=> {
//     toast.classList.remove("actives");
// })