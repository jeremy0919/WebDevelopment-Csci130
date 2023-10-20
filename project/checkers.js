function createTable(){
   // const body = document.body,
    table = document.createElement('table');
    table.style.width = '100px';
    table.style.borderCollapse = "collapse";
    let n = 10;
    let tablebody = document.createElement("tbody");
    table.appendChild(tablebody);
  //  table.style.c
    let x = 1;
    for(let i =1; i<=n;++i){
        x = x*i;
        let tr = document.createElement("trow");
        tablebody.appendChild(tr); 
        for(let j =0; j<=n; ++j){
            let td = document.createElement("td");
        //    let td2= document.createElement("td");
            let input = document.createElement("INPUT");
            input.setAttribute("type", "text");
            let input2 = document.createElement("INPUT");
            input2.setAttribute("type", "text");
            if(j ==0){
            input.setAttribute("value",i );
            }
            if(j == 1){
                input2.setAttribute("value", x );
            }
            td.appendChild(input);
            td.appendChild(input2);
            tr.appendChild(td); 
         //   tr.appendChild(td2); 
        }
        tablebody.appendChild(tr);

        
    }
    document.getElementsByClassName("table")[0].appendChild(table);
}
