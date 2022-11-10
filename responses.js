function getBotResponse(input) {
    var lowerinput = input.toLowerCase();
    if (lowerinput == "hello") {
        return "Hello there!";
    } else if (lowerinput == "bye") {
        return "talk to you later!";
    } else if(lowerinput == "what is this page about") {
        return "This page is a database website specially made for prostate cancer and its associated genes and proteins";
    }
    else if(lowerinput== "how can i search protein data"){
        return "go to protein search section and enter the protein ID and press search, voila you will be redirected to protein information page";
    }
    else if(lowerinput == "how can i search gene data"){
        return "go to gene search section and enter the GENE ID and press search, voila you will be redirected to gene information page";
    }
    else if(lowerinput == "how can i give feedback"){
        return "go to the feedback section and select any emoticons and rate us";
    }
    else if(lowerinput == "how can i contact you"){
        return "go to feedback and in the textfield, type your contact details so we will contact you later";
    }
    else if(lowerinput == "what can you do"){
        return "I can help you by assisting you in this page and providing solution for your queries";
    }
    else if(input == " "){
        return "Ask me something";
    }
    else{
        return "sorry! Try something else";
    }
}