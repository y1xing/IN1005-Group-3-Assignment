/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

$(document).ready(registerEventHandlers);

function registerEventHandlers() {
    let updateButton = document.getElementsByClassName("update-button");
        
    if (updateButton !== null && updateButton.length > 0) {
        for (let i=0; i < updateButton.length; i++) {
            
            updateButton[i].addEventListener("click", updateForm);
        }
    } else {
        console.log("No update button");
    }
}

function updateForm(e) {

    // Get form fields
    let lname = document.getElementById("lname");
    let fname = document.getElementById("fname");
    let email = document.getElementById("email");
    let password = document.getElementById("pwd");
    
    // Get button type attr
    let type = e.target.getAttribute("type");
    
    // Change form editable according to button type attr
    if (type === "button") {
        e.target.setAttribute("type", "submit");
        e.target.innerHTML = " Save ";
        
        lname.removeAttribute("disabled");
        fname.removeAttribute("disabled");
        email.removeAttribute("disabled");
        password.removeAttribute("disabled");
        
        lname.setAttribute("placeholder", "Type new last name here");
        fname.setAttribute("placeholder", "Type new first name here");
        email.setAttribute("placeholder", "Type new email here");
        password.setAttribute("placeholder", "Type new password here");
        
        e.preventDefault();
                
    } else {
//        e.target.setAttribute("type", "button");
//        e.target.innerHTML = " Update ";
//        
//        lname.setAttribute("disabled", "");
//        fname.setAttribute("disabled", "");
//        email.setAttribute("disabled", "");
//        password.setAttribute("disabled", "");
//       
//        
//        console.log("add disabled");
    }
}

//        $.ajax({
//            url: "process_update.php",
//            type: "post",
//            dataType: {lname: "dabe", fname: fname, email: email, password: password},
//            success:function(result) {
//                console.log(result.output);
//            }
//        });
