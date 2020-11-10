var objPeople = [
	{ // Netgear default creds
		username: "admin",
		password: "password"
	},
	{ //pfsense router
		username: "admin",
		password: "pfsense"
	},
	{ // 3Com 3CR414492
		username: "root",
		password: "!root"
	}

]

function getInfo() {
	var username = document.getElementById('username').value
	var password = document.getElementById('password').value

	for(var i = 0; i < objPeople.length; i++) {
		// check is user input matches username and password of a current index of the objPeople array
		if(username == objPeople[i].username && password == objPeople[i].password) {
			alert(username + " is logged in!!! the flag is: seclounge{835f0e4d09502ee5ec87e79bd5bd2037}")
      console.log(username + " is logged in!!! the flag is: seclounge{835f0e4d09502ee5ec87e79bd5bd2037}")
			// stop the function if this is found to be true
			return
		}
	}
  alert("Incorrect credentials detected! Initiating override sequence!")
	console.log("incorrect username or password")
}
