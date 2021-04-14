//PROGRESS BAR
var totalQuestions = 8;
var currentQuestion = 0;
var $progressbar = $("#progressbar");

$("#moins").on("click", function(){
    if (currentQuestion >= totalQuestions){ return; }
    currentQuestion--;
    $progressbar.css("width", Math.round(100 * currentQuestion / totalQuestions) + "%");
});
$("#plus").on("click", function(){
    if (currentQuestion >= totalQuestions){ return; }
    currentQuestion++;
    $progressbar.css("width", Math.round(100 * currentQuestion / totalQuestions) + "%");
});


//<!-- Citation aléatoir -->

$(document).ready(function()
    {
        $("#quote").hide();

        $("#new-quote-button").on("click",function() {
            $("#paragraphe").hide();
            $("#quote").show();

            function Quote(text) {
                this.text = text
            }

            var currentIndex = 0;

//var quote1 = new Quote('"J’ai vu tant de choses, que vous, humains, ne pourriez pas croire… De grands navires en feu surgissant de l’épaule d’Orion, j’ai vu des rayons fabuleux, des rayons C, briller dans l’ombre de la Porte de Tannhaüser. Tous ces moments se perdront dans l’oubli, comme les larmes dans la pluie. Il est temps de mourir."');
            var quote2 = new Quote('"Tous ces moments se perdront dans l’oubli, comme des larmes dans la pluie."');
            var quote3 = new Quote('"T’endors pas c’est l’heure de mourir."');
//var quote4 = new Quote('"I’ve seen things you people wouldn’t believe. Attack ships on fire off the shoulder of Orion. I watched C-beams glitter in the dark near the Tanhauser gate. All those moments will be lost in time like tears in rain. Time to die.Wake up, time to die."');
            var quote5 = new Quote('"Wake up, time to die."');
            var quote6 = new Quote('“- C’est dur de pas pouvoir se gratter là où ça démange.\n' +
                '- Ça c’est vrai.”');
            var quote7 = new Quote('"Un flic quand il quitte le métier il n’est plus personne."');
            var quote8 = new Quote('"I’d rather be a killer than a victim."');
            var quote9 = new Quote('"Avez-vous déjà désactivé un humain par erreur ?"');
            var quote10 = new Quote('"C’est dommage qu’elle doive mourir, mais on en est tous là !"');
            var quote11 = new Quote('"Étrange sensation que de vivre dans la peur… voila ce que c’est d’être un esclave."');
            var quoteCollection = [quote2, quote3, quote5, quote6, quote7, quote8, quote9, quote10, quote11];

            function generateRandomQuote() {
                var randomQuoteIndex = getRandomIntInclusive(0, quoteCollection.length);

                // Avoid getting the same quote twice using a while loop
                while (randomQuoteIndex === currentIndex) {
                    randomQuoteIndex = getRandomIntInclusive(0, quoteCollection.length)
                }

                // Set the index that is now current.
                currentIndex = randomQuoteIndex;

                // Select a random quote from the list of quotes using the random index
                var randomQuote = quoteCollection[randomQuoteIndex];

                // Return
                return randomQuote
            }

// Function to handle the presentation of the quote
            function showRandomQuote(randomQuote) {
                document.getElementById('quote').innerHTML = randomQuote.text
            }

// Standard method that returns a random integer between min (included) and max (included)
// Apparaently we have to use Math.floor(), as Math.round() will give a non-uniform distribution!
// Source:https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
            function getRandomIntInclusive(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min
            }

// Main function that generates a quote and presents it.
            function getRandomQuote() {
                var randomQuote = generateRandomQuote();
                showRandomQuote(randomQuote)
            }



            document.addEventListener('DOMContentLoaded', getRandomQuote);
            document.getElementById('new-quote-button').addEventListener('click', getRandomQuote)
        })
    }
)



