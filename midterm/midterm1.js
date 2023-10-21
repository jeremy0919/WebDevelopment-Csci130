
function output(n){
    console.log(Factorial1(n));
}
function Factorial1(n){
    function Factorial(n){
        if(n>=0){
        return(n*Factorial(n-1));
    }
}   
console.log(Factorial(n));
}

function Factorial2(n){
    let factArray = new Array(n);
    for(let i =0; i<n;++i){
        factArray[i] = Factorial(i);
    }
    function Factorial(n){
        if(n>=0){
        return(n*Factorial(n-1));
    }
}
}

function ReverseArray(arr){
    let x = arr.length();
    let count = x;
    let outArray = new Array(x);
    for(let i =0; i<x;++i){
        outArray[i] = arr[count];
        count = count-1;
    }

}

function Factorial3(n){
    let table = document.createElement("TABLE");
    let tablehead = document.createElement("thead");
    let tr1 = document.createElement("trow");
    let td1 = document.createElement("td");
    let td2 = document.createElement("td");
    let in1 = document.createElement("input");
    in1.setAttribute("type", "text");
    in1.setAttribute("value","index" );
    let in2 = document.createElement("input");
    in2.setAttribute("type", "text");
    in2.setAttribute("value", "factorial");
    td1.appendChild(in1);
    td2.appendChild(in2);
    tr1.appendChild(td1);
    tr1.appendChild(td2);
    tablehead.appendChild(tr1);
    table.appendChild(tablehead);
    let tablebody = document.createElement("tbody");
    table.appendChild(tablebody);
  //  table.style.c
    let x = 1;
    for(let i =1; i<=n;++i){
        x = x*i;
        let tr = document.createElement("trow");
        tablebody.appendChild(tr); 
        for(let j =0; j<2; ++j){
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

/*

<html5> 
    <head>
<script>
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if(httpRequest.readyState == XMLHttpRequest.DONE){
            if(httpRequest.status === 200){
                data = JSON.parse(httpRequest.responseText);
                // do stuff here
            }
        }
    };
    let path = "lab-6\class.json";
    httpRequest.open('GET',path,true) // path = local path
    httpRequest.send();
</script>
    </head>
    <body>
        <form>
            <input type="button" value="Press button to display Generate Pokemon JSON representation">
            <input type="button" value="Press button to display a pokemon">
            <input type="button" value="Previous">
            <input type="button" value="Next">
        </form>
    </body>
</html5>
*/