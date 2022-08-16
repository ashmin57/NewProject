function formValidate(){
    let fname = document.complaint.userName.value;
    let phone = document.complaint.phone.value;
    let address = document.complaint.address.value;

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

    function validName(){
        if(fname == ""){
            alert("Please input your name");
        }
    }
    validName();
}