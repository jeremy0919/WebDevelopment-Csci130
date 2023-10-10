function drawCanvas(formula){
    var c = document.getElementById("myCanvas");
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
        y = Math.pow(x,2)
        x=10*x;
        ctx.lineTo(x,200-y);
        ctx.stroke();
    }

}

class Car {
    constructor(brand) {  // Constructor
      this.carname = brand;
    }
  }

  class person {
    constructor(value) {  // Constructor
      this.Name = value;
    }
    constructor(value) {  // Constructor
        this.LastName = value;
      }
      constructor(value) {  // Constructor
        this.age = value;
      }
  }
function dataRetrieval(){
    thisPerson = new person( document.getElementById('Fname').value);
    alert(thisPerson.Name);
}