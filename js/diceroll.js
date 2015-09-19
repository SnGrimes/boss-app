var howManyDie = 0;
var typeOfDie = 0;


// This function will roll a d20 (value 1-20) whenever the ROLL! button is clicked.
function Roller(event){
    document.getElementById("rollValue").value = Math.ceil(Math.random() * (20));
    
};

// This function will fire when the die list is changed and a die amount is selected. It will then create an event listener
// to the Testing! button which will roll the equivalent die.
function pickDie(event) {
    
    var a;
    switch (event.target.value) {
        case "d20":
            a = 20;
            break;
        case "d12":
            a = 12;
            break;
        case "d10":
            a = 10;
            break;
        case "d8":
            a = 8;
            break;
        case "d6":
            a = 6;
            break;
        case "d4":
            a = 4;
            break;
    };
    document.getElementById("multi").addEventListener("click", function() {
        document.getElementById("dieOutput").value = Math.ceil(Math.random() * (a))}, false);
    
   
}

// This function will set the type of die to be rolled. The global variable typeOfDie is set to the
// appropriate value.
function allTheDie(event) {
       howManyDie = parseInt(document.getElementById("howManyDie").value);
     
     switch (event.target.value) {
        case "d20":
            typeOfDie = 20;
            break;
        case "d12":
            typeOfDie = 12;
            break;
        case "d10":
            typeOfDie = 10;
            break;
        case "d8":
            typeOfDie = 8;
            break;
        case "d6":
            typeOfDie = 6;
            break;
        case "d4":
            typeOfDie = 4;
            break;        
     };
     //error checking - to be removed
     console.log("d" + typeOfDie);
         
    };
    

    // This function will roll the dice, add the values togetherm, then output the value to the input box.
    function rollDice() {
        console.log("You chose to roll: " + howManyDie + " die");
        var result;
        var diceRoll = new Array();
        
            for (var count = 0; count < howManyDie; count++) {
                   diceRoll[count] = (Math.ceil(Math.random() * typeOfDie));
            };
            
        
        result = diceRoll.reduce(function(total, value) {return total + value});
        
        document.getElementById("multiResult").value = result;
        
        cleanUp();
        
    };
    // This function will rest the global variables so the user can keep rolling dice. There must be a standard way of doing    this.
    function cleanUp () {
        howManyDie = 0;
        typeOfDie = 0;
        };
    
    

    




