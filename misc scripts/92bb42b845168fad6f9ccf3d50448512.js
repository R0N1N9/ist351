var objF = [
	{
		f: "secLounge{b09e0f69eb66768817aa11513219bdc0}"
	},
	{
		f: "seclounge{835f0e4d09502ee5ec87e79bd5bd2037}"
	},
  {
		f: "seclounge{bcfd8aa0dd2b2f4065d3e0a393136c2a}"
	},
  {
		f: "seclounge{627afea63d4646296c0844ebe0cce27b}"
	},
	{
		f: "seclounge{HelloWorld}"
	}
]

function getInfoF() {
	var f = document.getElementById('f').value

	for(var i = 0; i < objF.length; i++) {
		// check is user input matches username and password of a current index of the objPeople array
		if(f == objF[i].f) {
			alert(f + " is correct!")
      console.log(f + " is correct!")
			// stop the function if this is found to be true
			return
		}
	}
  alert("Incorrect! Keep Trying!")
	console.log("Incorrect! Keep Trying!")
}
