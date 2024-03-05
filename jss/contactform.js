const sendBtn=document.getElementById("send-contact-form-btn");
const formName=document.getElementById("name-input-field");
const formName2=document.getElementById("name2-input-field");
const emailInput=document.getElementById("email-input-field");
const formMsg=document.getElementById("m-input-field");
const formCounter=document.getElementById("form-counter");

//db work functions
function isLocalStorage() {
    if (localStorage.getItem("formDatas")) {
        console.log("db FormDatas exista.");
        return true;
    } else {
        console.log("db FormDatas nu exista");
        return false;
    }
}
function IntputDataToObj(name,name2,mail,msg){
    let formData={
        nume:name,
        prenume:name2,
        Email:mail,
        mesaj: msg
    }
    return formData;
}

//field validation functions
function emailValidation(text){
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(text.match(validRegex)){
        
        return true;
    }else{
        
        return false;
    }

}

//other functions
function clearFields(formName, formName2,emailInput,formMsg ){
    formName.value=" ";
    formName2.value=" ";
    emailInput.value="";
    formMsg.value="";
}
let dbFromLocalStorage
if(isLocalStorage()){
    dbFromLocalStorage=JSON.parse(localStorage.getItem("formDatas"));
}else{
    dbFromLocalStorage=[];
}
//updade Counter
formCounter.innerHTML=dbFromLocalStorage.length;



//action
sendBtn.addEventListener("click",function(){
    event.preventDefault();
    if(emailValidation(emailInput.value)){
        let formData=IntputDataToObj(formName.value,formName2.value,emailInput.value,formMsg.value)
        dbFromLocalStorage.push(formData);
        
        localStorage.setItem("formDatas",JSON.stringify(dbFromLocalStorage) );
        clearFields(formName,formName2,emailInput,formMsg)
        formCounter.innerHTML=dbFromLocalStorage.length;
    }else{
        alert("Introdu un mail valid!");
    }


});
