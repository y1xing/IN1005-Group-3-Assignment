const openBtn = document.getElementsByClassName("open");
const toast = document.getElementById("toast-container");
const closeBtn = document.getElementById("close");

// loop through all the open buttons
for (let i = 0; i < openBtn.length; i++) {
    openBtn[i].addEventListener("click", () => {
        console.log("clicked");
        toast.classList.add("actives");
        setTimeout(()=> {
            toast.classList.remove("actives");
        }, 5000)
    })
}

closeBtn.addEventListener("click", ()=> {
    toast.classList.remove("actives");
})