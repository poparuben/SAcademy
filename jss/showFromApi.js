

fetch("https://www.fruitmap.org/api/trees")
    .then(response=> response=response.json())
         .then(data=> {

            let dataHtmlElements="";
            console.log(data);
             data.forEach(element => {

                dataHtmlElements+=`
                
                
                <div class="productElement" onclick="location.href='#';" style="cursor: pointer;">
                  <div class="productElementContainer">
                    <img class="productElementImg" src="./img/suc.png" alt="oranges" srcset="">
                    <div class="productElementInfo">
                      <p class="productElementName">${element.name}</p>
                      <div style="background-color:${element.color}" class="square"></div>
                    </div>
                  </div>
                  </div>
               

                `
             });
             const dataList=document.getElementById("data-from-json")
             dataList.innerHTML= dataHtmlElements;
         })
    .catch(error=> console.log(error))

    // function getData(){
    //   return new Promise((resolve, reject) => {
        
    //   })
    // }
    // cons