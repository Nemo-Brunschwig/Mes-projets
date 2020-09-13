//rectangle
//draw_roundrect(x, y, x + width, y + height, 0);
draw_sprite(sBtn, 0, x ,y);

//draw text
draw_set_color(c_black);
draw_set_halign(fa_center);
draw_set_valign(fa_middle);
draw_text(x, y + height / 2, text);
draw_set_halign(fa_left);
draw_set_valign(fa_top);

//reset color
draw_set_color(c_white);