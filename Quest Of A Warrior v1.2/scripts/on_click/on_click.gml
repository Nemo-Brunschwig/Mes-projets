show_debug_message("Boutton cliqué : " + text);

if (text == "Play"){
	room_goto(1);
}else if(text == "Quit"){
	game_end();
}