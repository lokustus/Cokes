if(navigator.serviceWorker){
	navigator.serviceWorker.register
	("sw.js");
	console.log("It's Workin'");
} else {
	console.log("Not workin'")
}