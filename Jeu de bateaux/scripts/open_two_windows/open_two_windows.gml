// Script assets have changed for v2.3.0 see
// https://help.yoyogames.com/hc/en-us/articles/360005277377 for more information
function open_two_windows(){
	if (parameter_count() == 3) {
		execute_shell(parameter_string(0) + " " +
			parameter_string(1) + " " +
			parameter_string(2) + " " +
			parameter_string(3) + " -secondary" + " -tertiary",false);
			
		//first window
		window_set_caption("P1");
		
		window_set_position(200, 260);
	}
	
	if (parameter_count() > 3) {
		
		//second window
		window_set_caption("P2");
		
		window_set_position(900, 260);
	}
}