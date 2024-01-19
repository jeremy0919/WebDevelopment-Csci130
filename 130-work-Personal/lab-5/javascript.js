var output = 0; // keeps track of total
var previous =0; // keeps track of previous/ next number
var current =0;
var lastfunct = "x"; // last function called
var input = ""; // input string to be displayed
let val = document.getElementById("plus");
paragraph = document.querySelector("p"); 
paragraph2 = document.querySelector("p1"); 

window.onload=function(){
paragraph = document.querySelector("p"); // where input string gets declared
var output = 0;
var previous =0;
var current =0;
var lastfunct = "x";
var lastval = "";
var input = "";

paragraph1 = document.querySelector("p1"); 
}

function display(event){
    OnAction(event);
    lastfunct = " ";

    paragraph1.textContent = output;
}
function multiply(event){
    if(event == 1){
      
        output = Number(previous) * output; // needs to be fixed
        
    }
    if(event!=1){
      //  OnAction(event);
        lastfunct = "multiply";
        input = input+ "*";
    }  
    previous ="";
    paragraph.textContent = input;
}
function OnAction(event){
    if(lastfunct!="x"){
        if(lastfunct == "plus"){
            plus(1);
        }
        if(lastfunct == "minus"){
            minus(1);
        }
        if(lastfunct == "multiply"){
            multiply(1);
        }
        if(lastfunct == "divide"){
            divide(1);
        }
    }
}

function root(event){

    output = Math.sqrt(output);
    input = output;
    previous ="";
    paragraph.textContent = input;
}

function sign(event){// not a lot of stupidity checks
    let temp = previous.length;
    input = input.slice(0,-temp);
    previous = previous*-1;
    input = input+previous;
    paragraph.textContent = input;
    if(lastfunct == "x"){
        output = previous;
    }
}
function decimal(event){
    input = input+".";
    paragraph.textContent = input;
    if(previous!=0){
    previous = "."+previous;
    }
    else{
        previous = ".";
    }
}
function clearcalc(event){
    output = 0;
    previous =0;
    current =0;
    lastfunct = "x";
    lastval = "";
    input = " ";
    paragraph.textContent = "0000";
    paragraph1.textContent = "0000";
}
function divide(event){
    if(event == 1){

        output = output/ Number(previous); //needs to be tested
        
    }
    if(event!=1){
      //  OnAction(event);
        lastfunct = "divide";
        input = input+ "/";
    }  
    previous ="";
    paragraph.textContent = input;
}
function plus(event){
    if(event!=1){
        OnAction(event);
        lastfunct = "plus";
        input = input+ "+";
    }
   if(event == 1){
    output = Number(previous) + output;
   }
    previous ="";
    paragraph.textContent = input;
}
function minus(event){

    if(event!=1){
    OnAction(event);
    input = input + "-";
    lastfunct = "minus"
    }
    if(event == 1){
    output = output - Number(previous);

    }

    previous = "";
    paragraph.textContent = input;
}
function six(event){
    input = input +6;
    previous = previous+"6";
    if(lastfunct == "x"){
        output = Number(previous);
     
    }
    paragraph.textContent = input;
}
function one(event){
    input = input +1;
    previous = previous+"1"; // need to both keep track of value but also allow for values over 10
    if(lastfunct == "x"){
        output =  Number(previous);
    }
    paragraph.textContent = input;
}
function two(event){
    input = input +2;
    previous = previous +"2";
    if(lastfunct == "x"){
        output = Number(previous);
    }
    paragraph.textContent = input;
}
function three(event){
    input = input +3;
    previous = previous +"3";
    if(lastfunct == "x"){
        output =  Number(previous);
    }
    paragraph.textContent = input;
}
function four(event){
    input = input +4;
    previous = previous +"4";
    if(lastfunct == "x"){
        output =  Number(previous);
    }
    paragraph.textContent = input;
}
function five(event){
    input = input +5;
    previous = previous+"5";
    if(lastfunct == "x"){
        output =  Number(previous);
    }
    paragraph.textContent = input;
}
function seven(event){
    input = input +7;
    previous = previous+"7";
    if(lastfunct == "x"){
        output = Number(previous);
    }
    paragraph.textContent = input;
}
function eight(event){
    input = input +8;
    previous = previous+"8";
    if(lastfunct == "x"){
        output =  Number(previous);
    }
    paragraph.textContent = input;
}
function nine(event){
    input = input +9;
    previous = previous+"9";
    if(lastfunct == "x"){
        output =  Number(previous);
    }
    paragraph.textContent = input;
}
function zero(event){
    input = input +0;
    previous = previous+"0";
    if(lastfunct == "x"){
        output = Number(previous);
    }
    paragraph.textContent = input;
}

function matrix(m1,n1,m2,n2){ 
    tableCreate(m1,n1);
    tableCreate(m2,n2);
  
}
function tableCreate(N,M) {
        const body = document.body,
        Table1 = document.createElement('table');
        Table1.style.width = '100px';
 
        Table1.style.borderCollapse = 'collapse';
        Table1.style.border = '1px solid black';
        Table1.style.marginRight= '500px';
        Table1.style.alignContent = 'left';
        for (let i = 0; i < N; i++) {
            const tr = Table1.insertRow();
            for (let j = 0; j < M; j++) {
                const td = tr.insertCell();
                if(j ==0){  
                    td.appendChild(document.createTextNode());
                    td.style.border = '1px solid black';
                }
                else{
                    td.appendChild(document.createTextNode());
                    td.style.border = '1px solid black';
                }
            }
        }
    body.appendChild(Table1);
    }


    function matrixAddition(){

        let l1 = document.getElementById("m1").value;
        let l2 = document.getElementById("m2").value;
        let w1 = document.getElementById("n1").value;
        let w2 = document.getElementById("n1").value;
        if(l1 == l2 && w1 == w2){
           
        let matrix1 = [];
        let table1 = document.getElementById("table1");
        for (let i = 0; i < l1; i++) {
        let row = [];
        for (let j = 0; j < w1; j++) {
            let cell = table1.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value; 
            row.push(parseFloat(inputValue)); 
        }
        matrix1.push(row);
        }
        
        let matrix2 = [];
        let table2 = document.getElementById("table2");
        for (let i = 0; i < l2; i++) {
        let row = [];
        for (let j = 0; j < w2; j++) {
            let cell = table2.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value;
            row.push(parseFloat(inputValue));
        }
        matrix2.push(row);
        }
        
        
        let resultMatrix = new Array(l2);
        for (let i = 0; i < l2; i++) {
        resultMatrix[i] = new Array(w1);
        }
        
        for (let i = 0; i < l2; ++i) {
        for (let j = 0; j < w1; ++j) { // should work needs to be tested
           
          
            
                resultMatrix[i][j] = matrix1[i][j] + matrix2[i][j];
    
        
           
        }
        }
        var removeTab1 = document.getElementById('table3'); 
        if(removeTab1!=null){
        var parentEl1 = removeTab1.parentElement;
            parentEl1.removeChild(removeTab1);
        }
        table3create(resultMatrix,l2,w1);

    }
    else{
        alert("matrices sizes cannot be added")
    }
        
    }
    function matrixSubtraction(){
     
        let l1 = document.getElementById("m1").value;
        let l2 = document.getElementById("m2").value;
        let w1 = document.getElementById("n1").value;
        let w2 = document.getElementById("n1").value;
        if(l1 == l2 && w1 == w2){
           
        let matrix1 = [];
        let table1 = document.getElementById("table1");
        for (let i = 0; i < l1; i++) {
        let row = [];
        for (let j = 0; j < w1; j++) {
            let cell = table1.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
            row.push(parseFloat(inputValue)); 
        }
        matrix1.push(row);
        }
        
        let matrix2 = [];
        let table2 = document.getElementById("table2");
        for (let i = 0; i < l2; i++) {
        let row = [];
        for (let j = 0; j < w2; j++) {
            let cell = table2.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value;
            row.push(parseFloat(inputValue));
        }
        matrix2.push(row);
        }
        
        
        let resultMatrix = new Array(l2);
        for (let i = 0; i < l2; i++) {
        resultMatrix[i] = new Array(w1);
        }
        
        for (let i = 0; i < l1; ++i) {
        for (let j = 0; j < w1; ++j) { // should work needs to be tested
           
          
            
                resultMatrix[i][j] = matrix1[i][j] - matrix2[i][j];
    
        
           
        }
        }
        var removeTab1 = document.getElementById('table3'); 
        if(removeTab1!=null){
        var parentEl1 = removeTab1.parentElement;
            parentEl1.removeChild(removeTab1);
        }
        table3create(resultMatrix,l1,w1);

    }
    else{
        alert("matrices sizes cannot be subtracted")
    }
        
    }
function matrixMultiply(){
let height1 = document.getElementById("m1").value;
let length1 = document.getElementById("n1").value;
let height2 = document.getElementById("m2").value;
let length2 = document.getElementById("n2").value;
if(length1==height2){
let matrix1 = [];
let table1 = document.getElementById("table1");
for (let i = 0; i < height1; i++) {
let row = [];
for (let j = 0; j < length1; j++) {
    let cell = table1.rows[i].cells[j];
    let inputValue = cell.querySelector('input').value; 
    row.push(parseFloat(inputValue)); 
}
matrix1.push(row);
}

let matrix2 = [];
let table2 = document.getElementById("table2");
for (let i = 0; i < height2; i++) {
let row = [];
for (let j = 0; j < length2; j++) {
    let cell = table2.rows[i].cells[j];
    let inputValue = cell.querySelector('input').value;
    row.push(parseFloat(inputValue));
}
matrix2.push(row);
}


let resultMatrix = new Array(length1);
for (let i = 0; i < length1; i++) {
resultMatrix[i] = new Array(length2);
}

for (let i = 0; i < height1; ++i) {
for (let j = 0; j < length1; ++j) {
    let sum = 0;
    for (let k = 0; k < height2; ++k) {
    
        sum += matrix1[i][k] * matrix2[k][j];
    }

    resultMatrix[i][j] = sum;
}
}
    var removeTab1 = document.getElementById('table3'); 
    if(removeTab1!=null){
    var parentEl1 = removeTab1.parentElement;
        parentEl1.removeChild(removeTab1);
    }
table3create(resultMatrix,length2,height1);
}
else(alert("cannot multiply"))
}
function table3create(resultMatrix,length,height){
  
const body = document.body,
        Table3 = document.createElement('table');
        Table3.style.width = '100px';
        Table3.style.textAlign = "left";
        Table3.style.borderCollapse = 'collapse';
        Table3.style.border = '1px solid black';
        Table3.style.marginRight= '50%';
        Table3.style.alignContent = 'left';
        for (let i = 0; i < height; i++) {
            const tr = Table3.insertRow();
            for (let j = 0; j < length; j++) {
                const td = tr.insertCell();

                    td.appendChild(document.createTextNode(resultMatrix[i][j]));
                    td.style.border = '1px solid black';
                
            }
        }
        Table3.id="table3";
    body.appendChild(Table3);
}


function matrix(){ 
var m1 = document.getElementById("m1").value;
var m2 = document.getElementById("m2").value;
var n1 = document.getElementById("n1").value;
var n2 = document.getElementById("n2").value;

if(m1 == ""){
alert("missing value height1")
}
else if(m2 == ""){
    alert("missing value height2")
}
else if(n1 == ""){
    alert("missing value length1")
}
else if(n2 == ""){
    alert("missing value length2")
}
else{
var removeTab1 = document.getElementById('table1'); 
if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}
var removeTab1 = document.getElementById('table2'); 
if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}var removeTab1 = document.getElementById('button1'); 
if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}
var removeTab1 = document.getElementById('button2'); 
if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}var removeTab1 = document.getElementById('button3'); 
if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}
var removeTab1 = document.getElementById('button4'); 
if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}
    tableCreate(m1,n1, "table1"); // tables created still need to modify values in tables and matrix multiply
   
    tableCreate(m2,n2, "table2");
    document.getElementById("ismatrix1").style.display = "block";
    document.getElementById("ismatrix2").style.display = "block";
    document.getElementById("ismatrix3").style.display = "block";
}
}
function transpose(matrix,length,width,name){
    let resultMatrix = new Array(width);
    for (let i = 0; i < width; i++) {
    resultMatrix[i] = new Array(length);
    }
    for(let i =0; i<length; i++){
        for(let j=0; j<width;j++){
            resultMatrix[j][i]= matrix[i][j]; // needs to be tested
        }
    }// need to learn how to delete old patrix

    var removeTab = document.getElementById(name); 
    var parentEl = removeTab.parentElement;
    parentEl.removeChild(removeTab);
    if(name == "table1"){
        var removeTab1 = document.getElementById('button1'); 
        var parentEl1 = removeTab1.parentElement;
        parentEl1.removeChild(removeTab1);
        var removeTab2 = document.getElementById('button2'); 
        var parentEl2 = removeTab2.parentElement;
        parentEl2.removeChild(removeTab2);
        let temp1 =document.getElementById("m1").value;
        let temp2 = document.getElementById("n1").value;
 
        document.getElementById("m1").value = temp2;
        document.getElementById("n1").value = temp1;

    }
    else if(name == "table2"){
        var removeTab1 = document.getElementById('button3'); 
        var parentEl1 = removeTab1.parentElement;
        parentEl1.removeChild(removeTab1);
        var removeTab2 = document.getElementById('button4'); 
        var parentEl2 = removeTab2.parentElement;
        parentEl2.removeChild(removeTab2);
        let temp1 =document.getElementById("m2").value;
        let temp2 = document.getElementById("n2").value;

        document.getElementById("m2").value = temp2;
        document.getElementById("n2").value = temp1;

    }
tableCreate1(resultMatrix,length,width,name);
}
function trace(matrix,length,width,name){
    let sum =0;
    for(let i =0; i<length; ++i){
        for(let j =0; j<width; ++j){
            if(i==j){
                sum += matrix[i][j];
            }
        }
    }
    if(name == "table1"){
        name = "Matrix 1";
    }
    if(name == "table2"){
        name = "Matrix 2";
    }
    alert("the trace of " +name+" is " +sum);
}
function tableCreate(N,M, name) { // add length width matrix and name to transpose/trace
if(name == "table1"){
        const body = document.body,
        Table1 = document.createElement('table');
        Table1.style.width = '100px';
        Table1.style.alignSelf = "left";
        Table1.style.borderCollapse = 'collapse';
        Table1.style.border = '1px solid black';
        Table1.style.marginRight= '50%';
        Table1.style.alignContent ="left";
        for (let i = 0; i < N; i++) {
            const tr = Table1.insertRow();
            for (let j = 0; j < M; j++) {
                const td = tr.insertCell();
                
                    td.appendChild(document.createElement("input"));

                    td.style.border = '1px solid black';
                
            }
        }
    body.appendChild(Table1);
    Table1.id = "table1";
    const button1 = document.createElement('button')

    button1.innerText = 'Transpose'

    button1.id = 'button1'

    button1.addEventListener('click', () => {
        let length = document.getElementById("m1").value;;
        let width = document.getElementById("n1").value;;
        let matrix1 = [];
        let table1 = document.getElementById("table1");
        for (let i = 0; i < length; i++) {
        let row = [];
        for (let j = 0; j < width; j++) {
            let cell = table1.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
            row.push(parseFloat(inputValue)); 
        }
        matrix1.push(row);
        }
        transpose(matrix1,length,width,name)
    })

    document.body.appendChild(button1)
    const button2 = document.createElement('button')

    button2.innerText = 'Trace'

    button2.id = 'button2'

    button2.addEventListener('click', () => {
        let length = N;
        let width = M;
        let matrix1 = [];
    let table1 = document.getElementById("table1");
    for (let i = 0; i < length; i++) {
    let row = [];
    for (let j = 0; j < width; j++) {
        let cell = table1.rows[i].cells[j];
        let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
        row.push(parseFloat(inputValue)); 
    }
    matrix1.push(row);
    }
        trace(matrix1,length,width,name)
    })

    document.body.appendChild(button2)

    }
    else {
        const body = document.body,
        Table2 = document.createElement('table');
        Table2.style.width = '100px';
        Table2.style.alignSelf = "left";
        Table2.style.borderCollapse = 'collapse';
        Table2.style.border = '1px solid black';
        Table2.style.marginRight= '500px';
        for (let i = 0; i < N; i++) {
            const tr = Table2.insertRow();
            for (let j = 0; j < M; j++) {
                const td = tr.insertCell();

                    td.appendChild(document.createElement("input"));

                    td.style.border = '1px solid black';
                
    }
                }
    body.appendChild(Table2);
    Table2.id = "table2";
    const button3 = document.createElement('button')

    button3.innerText = 'Transpose'

    button3.id = 'button3'

    // Attach the "click" event to your button
    button3.addEventListener('click', () => {
        let length = document.getElementById("m2").value;;
        let width = document.getElementById("n2").value;;
        let matrix1 = [];
    let Table2 = document.getElementById("table2");
    for (let i = 0; i < length; i++) {
        let row = [];
    for (let j = 0; j < width; j++) {
        let cell = Table2.rows[i].cells[j];
        let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
        row.push(parseFloat(inputValue)); 
    }
    matrix1.push(row);
    }
        transpose(matrix1,length,width,name)
    })

    document.body.appendChild(button3)
    const button4 = document.createElement('button')

    button4.innerText = 'Trace'

    button4.id = 'button4'

    button4.addEventListener('click', () => {
        let length = N;
        let width = M;
        let matrix1 = [];
let table1 = document.getElementById("table2");
for (let i = 0; i < length; i++) {
let row = [];
for (let j = 0; j < width; j++) {
    let cell = table1.rows[i].cells[j];
    let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
    row.push(parseFloat(inputValue)); 
}
matrix1.push(row);
}
        trace(matrix1,length,width,name)
    })

    document.body.appendChild(button4)

    }
    }

    function tableCreate1(matrix,M,N, name) { // add length width matrix and name to transpose/trace
        if(name == "table1"){
                const body = document.body,
                Table1 = document.createElement('table');
                Table1.style.width = '100px';
                Table1.style.textAlign = "left";
                Table1.style.borderCollapse = 'collapse';
                Table1.style.border = '1px solid black';
                Table1.style.paddingRIght= '50%';
                for (let i = 0; i < N; i++) {
                    const tr = Table1.insertRow();
                    for (let j = 0; j < M; j++) {   
                        const td = tr.insertCell();
                        
                            td.appendChild(document.createElement("input")).value = matrix[i][j];
                  
                          
                            td.style.border = '1px solid black';
                        
                    }
                }
            body.appendChild(Table1);
            Table1.id = "table1";
            const button1 = document.createElement('button')
        
            button1.innerText = 'Transpose'
        
            button1.id = 'button1'
        
            button1.addEventListener('click', () => {
                let length = N;
                let width = M;
                transpose(matrix,length,width,name)
            })
        
            document.body.appendChild(button1)
            const button2 = document.createElement('button')
        
            button2.innerText = 'Trace'
        
            button2.id = 'button2'
        
            button2.addEventListener('click', () => {
                let length = N;
                let width = M;
                trace(matrix,length,width,name)
            })
        
            document.body.appendChild(button2)
        
            }
                        else {
                const body = document.body,
                Table2 = document.createElement('table');
                Table2.style.width = '100px';
                Table2.style.textAlign = "left";
                Table2.style.borderCollapse = 'collapse';
                Table2.style.border = '1px solid black';
                Table2.style.paddingRIght= '50%';
                for (let i = 0; i < N; i++) {
                    const tr = Table2.insertRow();
                    for (let j = 0; j < M; j++) {
                        const td = tr.insertCell();
        
                        td.appendChild(document.createElement("input")).value = matrix[i][j];
                        td.style.border = '1px solid black';
                        td.nodeValue = matrix[i][j];
                        
            }
                        }
            body.appendChild(Table2);
            Table2.id = "table2";
            const button3 = document.createElement('button')
        
            button3.innerText = 'Transpose'
        
            button3.id = 'button3'
        
            // Attach the "click" event to your button
            button3.addEventListener('click', () => {
                let length = N;
                let width = M;
                transpose(matrix,length,width,name)
            })
        
            document.body.appendChild(button3)
            const button4 = document.createElement('button')
        
            button4.innerText = 'Trace'
        
            button4.id = 'button4'
        
            button4.addEventListener('click', () => {
                let length = N;
                let width = M;
                trace(matrix,length,width,name)
            })
        
            document.body.appendChild(button4)
        
            }
            }