xwidth = window_get_width();
yheight = window_get_height();

draw_sprite(sTxt, 0, xwidth/2, yheight/1.25);
draw_set_halign(fa_center);
draw_set_color(c_black);
draw_text(xwidth/2, yheight/1.25, message[i]);

if (keyboard_check_pressed(vk_space)){
	i++;
}

if (i > messageEnd){
	i = 0;
	is_talking--;
	global.talking--;
}