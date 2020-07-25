const box = document.querySelector("#box")
const parameterInput = document.querySelector("#parameter-input")
const searchButton = document.querySelector("#search-button")
const responseBox = document.querySelector("#response-box")
const mainForm = document.querySelector("#main-form")

mainForm.addEventListener("submit", requestToAPI)

function requestToAPI(){
	event.preventDefault()

	let parameter = parameterInput.value.trim()
	let request = new XMLHttpRequest()
	request.onreadystatechange = () => {
		if(request.readyState == 4 && request.status == 200) {
			responseBox.innerText = request.responseText
		}
	}
	request.open("GET", "myApi.php?parameter=" + parameter)
	request.send()
}