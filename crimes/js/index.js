function validation(){
    let file = document.complaint.file.value;
    let phone = document.complaint.phone;
    var numbers = /^[9][6-8]{1}[0-9]{8}/;
        function validPhone(){
            if(phone.value.match(numbers)){
                // phone.focus();
                return true;
            }
            else{
                alert('Phone number should be of 10 character in correct format starting from 9 following 6-8');
                event.preventDefault();
            }
        }
        validPhone();
               
        function validImg(){
            //Validate profile image
            if (file == "") {
                alert( "Insert Images");
                event.preventDefault();
            } else {
                var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                if (!allowedExtensions.exec(file)) {
                alert( "Invalid file type, Only images allowed");
                    event.preventDefault();
                } else {
                    return true;
                }
            }
        }
        validImg();   
}   
const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
        body.classList.remove("scroll-up");
        return;
    }

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up");
        body.classList.add("scroll-down");
    } else if (
        currentScroll < lastScroll &&
        body.classList.contains("scroll-down")
    ) {
        body.classList.remove("scroll-down");
        body.classList.add("scroll-up");
    }
    lastScroll = currentScroll;
});
