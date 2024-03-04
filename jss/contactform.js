const sendBtn=document.getElementById("send-contact-form-btn");

const formName=document.getElementById("name-input-field");
const formName2=document.getElementById("name2-input-field");
const emailInput=document.getElementById("email-input-field");
const formMsg=document.getElementById("m-input-field");
const formCounter=document.getElementById("form-counter");





//DECLARED FUNCTIONS

    //mail validation
function emailValidation(text){
    if(!text.includes("@")){
        
        return false;
    }else{
        
        return true;
    }

}
function toLocalStorage(name,name2,mail,msg){

    if(!isEmpty(name,name2,mail,msg)){
    let formData={
        nume:name,
        prenume:name2,
        Email:mail,
        mesaj: msg
    }
    let storageName=generateStringName();
    localStorage.setItem(storageName,JSON.stringify(formData));
    updateCounter(formCounter);
   

    } 
    else{
        alert("Fill form fields!")
    } 

}
function generateStringName(){
    let result="formData"+localStorage.length;    
    return result;
}
function isEmpty(formName, formName2,emailInput,formMsg){
    if(formName.length==0|| formName2.length==0||emailInput.length==0||formMsg.length==0){
        return true;
    }
    else{
        return false
    }
}
function updateCounter(formCounter){
    formCounter.innerHTML=localStorage.length;

}
function clearFields(formName, formName2,emailInput,formMsg ){
    formName.value=" ";
    formName2.value=" ";
    emailInput.value="";
    formMsg.value="";
}

    //save info from form



//action
sendBtn.addEventListener("click",function(){
    event.preventDefault();
    if(emailValidation(emailInput.value)){
        console.log("Succes");
        toLocalStorage(formName.value,formName2.value,emailInput.value,formMsg.value)
        clearFields(formName,formName2,emailInput,formMsg)
        
    }
    else{
        alert("Introdu un mail valid!");
       
    }

})

updateCounter(formCounter);


//read INTERNET LOCAL STORAGE
// let objectR= localStorage.getItem("contactFormData",myObj);
// console.log(JSON.parse(objectR));
