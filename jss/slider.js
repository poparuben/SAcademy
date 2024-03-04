const slider=document.getElementById("tochangeSlider");
let sliderNumber=0;

function changeSlide(index,slider){
  if(index==3){
    index=0;
  }else if(index==-1){
    index=2;
  }
    if(index==0){
        slider.innerHTML=`
        
        
           <p>ADUCEM</p>
           <H1>PIATA APROAPE</H1>
           <H2>LIVRARE LA DOMICILIU1</H2>
           <br>
            <a href="/magazin.html" class="btn btn-main">VEZI PRODUSE</a>
        `
        // index++;
        console.log(index);
       
    }
    else if(index==1){
        slider.innerHTML=`
        <p>ADUCEM</p>
        <H1>LA DISPOZITIA TA</H1>
        <H2>Contact Us now</H2>
        <br>
         <a href="/magazin.html" class="btn btn-main">Contact </a>
        `
        // index++;
        console.log(index);
    }
    else if(index==2){
        slider.innerHTML=`
        <p>ADUCEM</p>
        <H1>SANATATEA TA</H1>
        <H2>Conteaza</H2>
        <br>
         <a href="/showPage.html" class="btn btn-main">VEZI LISTA</a>
        `
        // index=0;
        console.log(index);
    }
    
    return index;
}

const leftSlideBtn=document.getElementById("leftSliderBtn");
const rightSlideBtn=document.getElementById("rightSliderBtn");

leftSlideBtn.addEventListener("click",function(){
   sliderNumber= changeSlide(--sliderNumber,slider)
   console.log("b: "+sliderNumber);
});
rightSlideBtn.addEventListener("click",function(){
   sliderNumber= changeSlide(++sliderNumber,slider)
   console.log("b: "+sliderNumber);

})



