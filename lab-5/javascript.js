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
    input = input.slice(0,-length);
    previous = previous*-1;
    input = input+previous;
    paragraph.textContent = input;
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
    if(lastfunct !="x"){
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
        let length = document.getElementById("m1").value;
        let height = document.getElementById("n2").value;
        let l1 = document.getElementById("m1").value;
        let l2 = document.getElementById("m2").value;
        let w1 = document.getElementById("n1").value;
        let w2 = document.getElementById("n1").value;
        if(l1 == l2 && w1 == w2){
           
        let matrix1 = [];
        let table1 = document.getElementById("table1");
        for (let i = 0; i < length; i++) {
        let row = [];
        for (let j = 0; j < length; j++) {
            let cell = table1.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value; 
            row.push(parseFloat(inputValue)); 
        }
        matrix1.push(row);
        }
        
        let matrix2 = [];
        let table2 = document.getElementById("table2");
        for (let i = 0; i < length; i++) {
        let row = [];
        for (let j = 0; j < height; j++) {
            let cell = table2.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value;
            row.push(parseFloat(inputValue));
        }
        matrix2.push(row);
        }
        
        
        let resultMatrix = new Array(length);
        for (let i = 0; i < length; i++) {
        resultMatrix[i] = new Array(height);
        }
        
        for (let i = 0; i < length; ++i) {
        for (let j = 0; j < height; ++j) { // should work needs to be tested
           
          
            
                resultMatrix[i][j] = matrix1[i][j] + matrix2[i][j];
    
        
           
        }
        }
        table3create(resultMatrix,length,height);

    }
    else{
        alert("matrices sizes cannot be added")
    }
        
    }
    function matrixSubtraction(){
        let length = document.getElementById("m1").value;
        let height = document.getElementById("n2").value;
        let l1 = document.getElementById("m1").value;
        let l2 = document.getElementById("m2").value;
        let w1 = document.getElementById("n1").value;
        let w2 = document.getElementById("n1").value;
        if(l1 == l2 && w1 == w2){
           
        let matrix1 = [];
        let table1 = document.getElementById("table1");
        for (let i = 0; i < length; i++) {
        let row = [];
        for (let j = 0; j < length; j++) {
            let cell = table1.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
            row.push(parseFloat(inputValue)); 
        }
        matrix1.push(row);
        }
        
        let matrix2 = [];
        let table2 = document.getElementById("table2");
        for (let i = 0; i < length; i++) {
        let row = [];
        for (let j = 0; j < height; j++) {
            let cell = table2.rows[i].cells[j];
            let inputValue = cell.querySelector('input').value;
            row.push(parseFloat(inputValue));
        }
        matrix2.push(row);
        }
        
        
        let resultMatrix = new Array(length);
        for (let i = 0; i < length; i++) {
        resultMatrix[i] = new Array(height);
        }
        
        for (let i = 0; i < length; ++i) {
        for (let j = 0; j < height; ++j) { // should work needs to be tested
           
          
            
                resultMatrix[i][j] = matrix1[i][j] - matrix2[i][j];
    
        
           
        }
        }
        table3create(resultMatrix,length,height);

    }
    else{
        alert("matrices sizes cannot be subtracted")
    }
        
    }
function matrixMultiply(){
let length = document.getElementById("m1").value;
let height = document.getElementById("n2").value;

let matrix1 = [];
let table1 = document.getElementById("table1");
for (let i = 0; i < length; i++) {
let row = [];
for (let j = 0; j < length; j++) {
    let cell = table1.rows[i].cells[j];
    let inputValue = cell.querySelector('input').value; // uses quert selector to get value from input, without it returns nan
    row.push(parseFloat(inputValue)); 
}
matrix1.push(row);
}

let matrix2 = [];
let table2 = document.getElementById("table2");
for (let i = 0; i < length; i++) {
let row = [];
for (let j = 0; j < height; j++) {
    let cell = table2.rows[i].cells[j];
    let inputValue = cell.querySelector('input').value;
    row.push(parseFloat(inputValue));
}
matrix2.push(row);
}


let resultMatrix = new Array(length);
for (let i = 0; i < length; i++) {
resultMatrix[i] = new Array(height);
}

for (let i = 0; i < length; ++i) {
for (let j = 0; j < height; ++j) {
    let sum = 0;
    for (let k = 0; k < length; ++k) {
    
        sum += matrix1[i][k] * matrix2[k][j];
    }

    resultMatrix[i][j] = sum;
}
}
table3create(resultMatrix,length,height);
}
function table3create(resultMatrix,length,height){
  
const body = document.body,
        Table3 = document.createElement('table');
        Table3.style.width = '100px';
 
        Table3.style.borderCollapse = 'collapse';
        Table3.style.border = '1px solid black';
        
        for (let i = 0; i < length; i++) {
            const tr = Table3.insertRow();
            for (let j = 0; j < height; j++) {
                const td = tr.insertCell();

                    td.appendChild(document.createTextNode(resultMatrix[i][j]));
                    td.style.border = '1px solid black';
                
            }
        }
    body.appendChild(Table3);
}


function matrix(){ 
var m1 = document.getElementById("m1").value;
var m2 = document.getElementById("m2").value;
var n1 = document.getElementById("n1").value;
var n2 = document.getElementById("n2").value;
    tableCreate(m1,n1, "table1"); // tables created still need to modify values in tables and matrix multiply
   
    tableCreate(m2,n2, "table2");
    document.getElementById("ismatrix1").style.display = "block";
    document.getElementById("ismatrix2").style.display = "block";
    document.getElementById("ismatrix3").style.display = "block";
    const button = document.createElement('button')

    // Set the button text to 'Can you click me?'
    button.innerText = 'Can you click me?'

    button.id = 'mainButton'

    // Attach the "click" event to your button
    button.addEventListener('click', () => {
      // When there is a "click"
      // it shows an alert in the browser
      alert('Oh, you clicked me!')
    })

    document.body.appendChild(button)
}

function tableCreate(N,M, name) {
if(name == "table1"){
        const body = document.body,
        Table1 = document.createElement('table');
        Table1.style.width = '100px';
 
        Table1.style.borderCollapse = 'collapse';
        Table1.style.border = '1px solid black';
        
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
    }
                else {
        const body = document.body,
        Table2 = document.createElement('table');
        Table2.style.width = '100px';
 
        Table2.style.borderCollapse = 'collapse';
        Table2.style.border = '1px solid black';
        
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
    }
    }