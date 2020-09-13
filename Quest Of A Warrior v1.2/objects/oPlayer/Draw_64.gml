// healthbar
barVie = (vie * 100) / maxVie;
draw_healthbar(1, 1050, 960, 1079, barVie, c_black, c_red, c_green, 0, true, true);

draw_set_color(c_white);
draw_set_halign(fa_center);
draw_text(490, 1055, string(vie) + " / " + string(maxVie));

//manabar
draw_healthbar(961, 1050, 1918, 1079, 100, c_black, c_blue, c_blue, 1, true, true);

draw_set_color(c_white);
draw_set_halign(fa_center);
draw_text(1451, 1055, "100 / 100");