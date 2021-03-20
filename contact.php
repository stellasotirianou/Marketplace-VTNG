<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/6c1c5be1ad.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="tech.js?newversion"></script>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
 

 $(document).ready(() => {


let $userName = "Tom";


$("#form-start").on("submit", (event) => {
    event.preventDefault();
    $userName = $("#username").val();
    $("#landing").slideUp(300);
    setTimeout(() => {
        $("#start-chat").html("Continue chat")
    }, 300);
});

function $postMessage() {
    $("#message").find("br").remove();
    let $message = $("#message").html().trim(); 
    $message = $message.replace(/<div>/, "<br>").replace(/<div>/g, "").replace(/<\/div>/g, "<br>").replace(/<br>/g, " ").trim();
    if ($message) { 
        const html = `<div class="post post-user">${$message + timeStamp()}</span></div>`; 
        $("#message-board").append(html);
        $scrollDown(); 
        botReply($message);
    };
    $("#message").empty();
};

$("#message").on("keyup", (event) => {
    if (event.which === 13) $postMessage(); 
}).on("focus", () => {
    $("#message").addClass("focus");
}).on("blur", () => {
    $("#message").removeClass("focus");
});
$("#send").on("click", $postMessage);


function botReply(userMessage) {
    const reply = generateReply(userMessage);
    if (typeof reply === "string") postBotReply(reply);
    else reply.forEach((str) => postBotReply(str));
};

function generateReply(userMessage) {
    const message = userMessage.toLowerCase();
    let reply = [`Sorry, I don't understand you.`, `Please try again`];

    // Generate some different replies
    if (/^hi$|^hell?o|^howdy|^hoi|^hey|^ola/.test(message)) reply = [`Hi ${$userName}`, `What can I do for you?`];
    else if (/test/.test(message)) reply = [`Ok`, `Feel free to test as much as you want`];
    else if (/help|sos|emergency|support/.test(message)) reply = [`I am here to help.`, `What seems to be the problem?`];
    else if (/class\=\"fa/.test(message)) reply = [`I see you've found the smileys`, `Cool! <span class="far fa-grin-beam fa-2x"></span>`, `Did you need something?`];
    else if (/how|what|why/.test(message)) reply = userMessage + " what?";
    else if (/^huh+|boring|lame|wtf|pff/.test(message)) reply = [`<span class="far fa-dizzy fa-2x"></span>`, `I'm sorry you feel that way`, `How can I make it better?`];
    else if (/bye|ciao|adieu|salu/.test(message)) reply = [`Ok, bye :)`];
    else if (/order/.test(message)) reply = ['Please let me know the reference number'];

    return reply;
};

function postBotReply(reply) {
    const html = `<div class="post post-bot">${reply + timeStamp()}</div>`;
    const timeTyping = 500 + Math.floor(Math.random() * 2000);
    $("#message-board").append(html);
    $scrollDown();
};
function timeStamp() {
    const timestamp = new Date();
    const hours = timestamp.getHours();
    let minutes = timestamp.getMinutes();
    if (minutes < 10) minutes = "0" + minutes;
    const html = `<span class="timestamp">${hours}:${minutes}</span>`;
    return html;
};

$("#back-button").on("click", () => {
    $("#landing").show();
});

$("#nav-icon").on("click", () => {
    $("#nav-container").show();
});

$("#nav-container").on("mouseleave", () => {
    $("#nav-container").hide();
});

$(".nav-link").on("click", () => {
    $("#nav-container").slideToggle(200);
});

$("#clear-history").on("click", () => {
    $("#message-board").empty();
    $("#message").empty();
});

$("#sign-out").on("click", () => {
    $("#message-board").empty();
    $("#message").empty();
    $("#landing").show();
    $("#username").val("");
    $("#start-chat").html("Start chat");
});
function $scrollDown() {
    const $container = $("#message-board");
    const $maxHeight = $container.height();
    const $scrollHeight = $container[0].scrollHeight;
    if ($scrollHeight > $maxHeight) $container.scrollTop($scrollHeight);
}

$("#emoi").on("click", () => {
    $("#emoijis").slideToggle(300);
    $("#emoi").toggleClass("fa fa-grin far fa-chevron-down");
});


$(".smiley").on("click", (event) => {
    const $smiley = $(event.currentTarget).clone().contents().addClass("fa-lg");
    $("#message").append($smiley);
    $("#message").select(); 
});





});


    </script>
	<title>VNTG</title>
</head>

<body>
	<div id="phone-wrapper">
		<div id="app">
			<div id="landing" class="bg-light text-light" style="">
            <span class="fa fa-robot fa-4x"></span>
				<div>
                <img src="logo3.png" width="120" height="50" alt="">
				</div>
        
				<form id="form-start">
					<input type="text" name="username" id="username" value="" placeholder="Your name" required>
					<button type="submit" id="start-chat">Start chat</button>
				</form>
			</div>
			<div id="header" class="bg-dark">
				<div><button id="back-button" class="text-light btn-transparent btn-icon fas fa-arrow-left"></button></div>
				<div class="text-light align-center">
					<h2>ChatBot</h2>
				</div>
				<div>
					<button id="nav-icon" class="text-light btn-transparent btn-icon fas fa-bars"></button>
					<nav id="nav-container" style="display: none;">
						<ul class="nav">
							<li id="search" class="nav-link"><span class="fas fa-search"></span>Search</li>
							<li id="clear-history" class="nav-link"><span class="fas fa-trash-alt"></span>Clear history</li>
							<li id="theme" class="nav-link"><span class="fas fa-cogs"></span>Settings</li>
							<hr>
							<li id="sign-out" class="nav-link"><span class="fas fa-sign-out-alt"></span>Sign out</li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="message-board">


			</div>
			<div id="form" class="bg-light">
				<div id="emoijis" style="display: none;">
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-beam"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-wink"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-tongue"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-tongue-wink"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-kiss-wink-heart"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-hearts"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-surprise"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-angry"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-tired"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-sad-tear"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-squint-tears"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-sad-cry"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-dizzy"></span></button>
				</div>
				<div><button id="emoi" class="btn-transparent btn-icon far fa-grin"></button></div>
				<div id="message" placeholder="Type your message here" rows="1" contenteditable></div>
				<div><button id="send" type="" class="btn-transparent btn-icon fas fa-paper-plane"></button></div>
			</div>
		</div>
	</div>

</body>

</html>