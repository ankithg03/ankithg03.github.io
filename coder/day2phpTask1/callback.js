var myClass = function(){
    console.log("Hello World");
}
setTimeout(myClass, 2000)
var doThisWhenDone = function (a) {
	setTimeout(function () {
		console.log(a);		
    }, 5000);
}
doThisWhenDone(53)
var doThisWhenDone = function (a) {
	setTimeout(function () {
		a()
    }, 5000);
}
var x = function (num) {
	console.log(num);
}
var doThisWhenDone = function (a, b) {
	setTimeout(function () {
		a(b)
    }, 5000);
}
doThisWhenDone(x, 53)