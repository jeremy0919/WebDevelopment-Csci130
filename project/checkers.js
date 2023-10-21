function createTable(){
   // const body = document.body,
    table = document.createElement('table');
   // table.style.width = '100px';
    
    table.style.borderCollapse = "collapse";
    table.style.width = "400px";
    let n = 10;
    let tablebody = document.createElement("tbody");
    table.appendChild(tablebody);

    for(let i =0; i<n;++i){
      
        let tr = document.createElement("trow");
      //  tablebody.appendChild(tr); 
        for(let j =0; j<n; ++j){
            let td = document.createElement("td");
        //    let td2= document.createElement("td");
            let input = document.createElement("canvas");
    
            let input2 = document.createElement("canvas");
          //  input2.setAttribute("input","text");
            input2.setAttribute("height", "40");
            input2.setAttribute("width", "40");
            input.setAttribute("height", "40");
       
            input.setAttribute("width", "40");

            if(i%2==0){
                if(j%2 ==0){
           // input.setAttribute("value",i );
            td.style.backgroundColor ="red";
            td.appendChild(input);
            td.style.height = "40px";
            td.style.width = "40px";
            }
                if(j%2 == 1){
              //  input2.setAttribute("value", x );
              td.appendChild(input);
                td.style.backgroundColor = "black";
              
                td.style.height = "40px";
                td.style.width = "40px";
            }}
            if(i%2==1){
                if(j%2 ==0){
              //  input.setAttribute("value",i );
                td.style.backgroundColor ="black";
                td.appendChild(input);
                td.style.height = "40px";
                td.style.width = "40px";
                }
                if(j%2 == 1){
               //     input2.setAttribute("value", x );
                    td.style.backgroundColor = "red";
                    td.appendChild(input2);
                    td.style.height = "40px";
                    td.style.width = "40px";
                }
            }
            if(i<=2&& td.style.backgroundColor=="black"){
              var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
              svg.setAttribute("width", "40");
              svg.setAttribute("height", "40");
  
              var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
              circle.setAttribute("cx", "20");
              circle.setAttribute("cy", "20");
              circle.setAttribute("r", "15");
              circle.setAttribute("stroke", "black");
              circle.setAttribute("stroke-width", "3");
              circle.setAttribute("fill", "blue");
  
              svg.appendChild(circle);
              td.appendChild(svg);
              td.addEventListener('click', function() {
                MovePiece(i, j);
              });
            }
            if(i>=7&&td.style.backgroundColor=="black"){
              var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
              svg.setAttribute("width", "40");
              svg.setAttribute("height", "40");
  
              var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
              circle.setAttribute("cx", "20");
              circle.setAttribute("cy", "20");
              circle.setAttribute("r", "15");
              circle.setAttribute("stroke", "black");
              circle.setAttribute("stroke-width", "3");
              circle.setAttribute("fill", "blue");
  
              svg.appendChild(circle);
              td.appendChild(svg);
              td.addEventListener('click', function() {
                MovePiece(i, j);
              });
            }
            tr.appendChild(td); 
         //   tr.appendChild(td2); 
        }
        tablebody.appendChild(tr);
     
        
    }
    document.getElementsByClassName("table")[0].appendChild(table);
}
function MovePiece(x,y){
  alert(x + " " + y);
}
