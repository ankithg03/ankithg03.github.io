function functionvalue(num){
    Calc.input.value += num
    try {
        Calc.input1.value = eval(Calc.input.value)
      }
      catch(err) {
        Calc.input1.value= err.message;
      }

}
function functionbackspace() {
var str =  Calc.input.value;
var newStr = str.slice(0, -1);
Calc.input.value=newStr;
try {
    Calc.input1.value = eval(Calc.input.value)
  }
  catch(err) {
    Calc.input1.value= err.message;
  }
}