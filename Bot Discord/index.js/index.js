//constantes pour discord
const { Client, Collection } = require('discord.js'); //appeler la bibliothèque discord
const client = new Client(); // C'est un client quoi
client.commands = new Collection(); //c'est la collection pour set le prefix, la marque et le thumb.

//constantes d'initialisations (c pour oim)
client.PREFIX = "w?";
client.MARQUE = "Warriors' Bot official";
client.THUMB = "https://cdn.discordapp.com/emojis/594149233246863380.png?v=1";
client.ROULETTE = 5;

//appel des commandes
client.commands.set(`help`, require("../commands/help.js"));
client.commands.set(`clear`, require("../commands/clear.js"));
client.commands.set(`roleinfo`, require("../commands/roleInfo.js"));
client.commands.set(`servinfo`, require("../commands/servInfo.js"));
//client.commands.set(`setBienvenue`, require("../commands/setBienvenue.js"));
client.commands.set(`test`, require("../commands/test.js"));
client.commands.set(`userinfo`, require("../commands/userInfo.js"));
client.commands.set(`roulette`, require("../commands/roulette.js"));
client.commands.set(`ban`, require("../commands/ban.js"));

client.on('ready', () => require('../events/ready.js')(client));
client.on('message', msg => require('../events/messages.js')(client, msg));
//client.on('guildMemberAdd', member => require('../events/guildMemberAdd.js')(client, member));
//⏫ comming soon ⏫

client.login('secret-token');
client.on('error', console.error);
client.on('warn', console.warn);
