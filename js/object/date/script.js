
let timeframe = (new Date()).getHours()
if (timeframe <= 5) { greeting.innerText = "Good Night おやすみ" }
else if (timeframe <= 11) { greeting.innerText = "Good Morning おはよう" }
else if (timeframe <= 17) { greeting.innerText = "Hello こんにちは" }
else if (timeframe <= 23 ) { greeting.innerText = "Good Evening こんばんは" }
else { greeting.innerText = "Good Night おやすみ" }
