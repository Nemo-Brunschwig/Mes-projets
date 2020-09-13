if (keyboard_check_pressed(vk_escape)){
	menuOpen = !menuOpen;
	
	if(menuOpen){
		event_user(0);
	}else{
		event_user(1);
	}
}

with (all){
	depth = -bbox_bottom;
}