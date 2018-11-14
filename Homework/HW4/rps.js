var imgPlayer;
var imgComputer;
var btnRock;
var btnPaper;
var btnScissors;
var btnGo;
var computerChoice;
var playerChoice;

function startGame(){
	document.getElementById('introScreen').style.display = 'none';
}

function replay(){
	document.getElementById('endScreen').style.display = 'none';
}

function init(){
	imgPlayer = document.getElementById("imgPlayer");
	imgComputer = document.getElementById("imgComputer");
	btnRock = document.getElementById("btnRock");
	btnPaper = document.getElementById("btnPaper");
	btnScissors = document.getElementById("btnScissors");
	btnGo = document.getElementById("btnGo");
	deselectAll();
}

function deselectAll(){
	btnPaper.style.backgroundColor = 'silver';
	btnScissors.style.backgroundColor = 'silver';
	btnRock.style.backgroundColor = 'silver';
}	

function select(choice){
	playerChoice = choice;
	imgPlayer.src = 'images/' + choice + '.png';
	deselectAll();
	if(choice=='rock') btnRock.style.backgroundColor = '#888888';
	if(choice=='paper') btnPaper.style.backgroundColor = '#888888';
	if(choice=='scissors') btnScissors.style.backgroundColor = '#888888';
	
	btnGo.style.display = 'block';
}

function go(){
	var txtEndTitle = document.getElementById('txtEndTitle');
	var txtEndMessage = document.getElementById('txtEndMessage');
	
	var numChoice = Math.floor(Math.random()*3);
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
	
	if(numChoice==0) {
		computerChoice = 'rock';
		imgComputer.src = 'images/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'yellow';
		if(playerChoice=='rock') {
			$("#txtEndTitle").empty().append("") ;
			$("#txtEndMessage").empty().append("TIE") ;
		}
		if(playerChoice=='paper') {
			$("#txtEndTitle").empty().append("Paper Covers Rock") ;
			$("#txtEndMessage").empty().append("YOU WIN") ;
		}
		if(playerChoice=='scissors') {
			$("#txtEndTitle").empty().append("Rock Smashes Scissors") ;
			$("#txtEndMessage").empty().append("YOU LOSE") ;
		}
		document.getElementById('endScreen').style.display = 'block';
	}
	else if(numChoice==1) {
		computerChoice = 'paper';
		imgComputer.src = 'images/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'yellow';
		if(playerChoice=='rock') {
			$("#txtEndTitle").empty().append("Paper Covers Rock") ;
			$("#txtEndMessage").empty().append("YOU LOSE") ;
		}
		if(playerChoice=='paper') {
			$("#txtEndTitle").empty().append("") ;
			$("#txtEndMessage").empty().append("TIE") ;	
		}
		if(playerChoice=='scissors') {
			$("#txtEndTitle").empty().append("Scissosrs Cut Paper") ;
			$("#txtEndMessage").empty().append("YOU WIN") ;
		}
		document.getElementById('endScreen').style.display = 'block';
	}
	else  {
		computerChoice = 'scissors';
		imgComputer.src = 'images/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'yellow';
		if(playerChoice=='rock') {
			$("#txtEndTitle").empty().append("Rock Smashes Scissors") ;
			$("#txtEndMessage").empty().append("YOU LOSE") ;
		}
		if(playerChoice=='paper') {
			$("#txtEndTitle").empty().append("Scissors Cuts Paper") ;
			$("#txtEndMessage").empty().append("YOU LOSE") ;
		}
		if(playerChoice=='scissors') {
			$("#txtEndTitle").empty().append("") ;
			$("#txtEndMessage").empty().append("TIE") ;	
		}
		document.getElementById('endScreen').style.display = 'block';
	}
	
}

function replay(){
	document.getElementById('endScreen').style.display = 'none';
	btnGo.style.display = 'none';
	
	deselectAll();
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
	
	imgPlayer.src = 'images/question.png';
	document.getElementById('imgComputer').src = 'images/question.png';
}
