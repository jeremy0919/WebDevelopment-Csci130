function drawCanvas(formula){
    var c = document.getElementById("myCanvas");
    let temp1 = formula.indexOf('x');
  //  let temp2 = formula.find('y');
    let temp3 = formula.length;
    var m =1;
    if(temp1!=-1){
    m = formula[temp1-1];
    }
    let exp = formula.indexOf('^');
    let pow = 0;
    if(exp!=-1){
      pow = formula[exp+1];
    }
    //https://canvasjs.com/docs/charts/basics-of-creating-html5-chart/labels-index-labels/
   // let temp4 = formula[temp2-1];
   let b =0;
    b =formula[temp3-1]
    var ctx = c.getContext("2d");
    ctx.moveTo(0, 200);
    ctx.lineTo(200, 200);
    ctx.moveTo(0,200);
    ctx.lineTo(0,0);
    ctx.moveTo(0,200);
    ctx.stroke();
    let y=0;
    let x=0;
    for(let i =0; i<14;++i){
        x = i;
        //y = Math.pow(x,2)
        y = m*Math.pow(x,pow);
        x=10*x;
        ctx.lineTo(x,200-y-b);
        ctx.stroke();
    }

}

class Car {
    constructor(brand) {  // Constructor
      this.carname = brand;
    }
  }

  class info { // creates class
    constructor(name, lname,age) { // constructs class based off of info
      this.name = name;
      this.lname = lname;
      this.age = age;
    }
  }
//super calls parent class 
  class MoreInfo extends info{
    constructor(id, name, lname, age){
      super(name, lname, age);
      this.id = id;
    }
    getFullInfo(){
      return this.id +" "+ this.name + " "+ this.lname + " " + this.age;
    }

  }


function dataRetrieval(){
  const more = new MoreInfo("id 10:", document.getElementById("Fname").value, document.getElementById("Lname").value, document.getElementById("Age").value);
  console.log(more.getFullInfo());
}



const my_data = {
  num: 1,
  name: 'john',
  lastname: 'doe',
  empty: '',
  und: undefined,
  nullable: null,
  date: new Date(),
}
function formCreation(){

  var form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("id","form1");
  var firstName = document.createElement("input");
  firstName.setAttribute("type", "text");
  firstName.setAttribute("name", "firstName");
  firstName.setAttribute("placeholder", "firstName");
  firstName.setAttribute("id", "Fname");
  firstName.setAttribute("value", my_data.name);

  var lastname = document.createElement("input");
  lastname.setAttribute("type", "text");
  lastname.setAttribute("name", "lastname");
  lastname.setAttribute("placeholder", "lastname");
  lastname.setAttribute("id", "Lname");
  lastname.setAttribute("value", my_data.lastname);

  var age = document.createElement("input");
  age.setAttribute("type", "text");
  age.setAttribute("name", "age");
  age.setAttribute("placeholder", "age");
  age.setAttribute("id", "Age");
  age.setAttribute("value", my_data.num);

  form.appendChild(firstName);
  form.appendChild(lastname);
  form.appendChild(age);

  document.getElementsByTagName("body")[0].appendChild(form);
  document.getElementsByClassName("test")[0].appendChild(form);
}

/*    <form action="">
        <input type="text" id="Fname" value="John">
        <input type="text" id="Lname" value="John">
        <input type="text" id="Age" value="John">
        <input type="button" onclick="dataRetrieval()"> 


    </form>*/