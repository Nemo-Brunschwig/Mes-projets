const { RichEmbed } = require('discord.js');

module.exports = (client, msg) => {
  const helpEmbed = new RichEmbed().setTitle(`LISTE DES COMMANDES | prefix : ${client.PREFIX}`)
    .setColor("#000001")
    .setFooter(`${client.MARQUE}`, client.THUMB)
    .setThumbnail("https://cdn.discordapp.com/emojis/395627468276367370.png?v=1")
    .addField("help", "affiche cette liste des commandes")
    .addField("servInfo", "affiche des infos sur le serveur")
    .addField("userInfo [ping (optionnel)]", "affiche des infos sur vous ou sur quelqu'un que vous avez ping")
    .addField("roleInfo [role]", "affiche des infos sur un role")
    .addField("clear [nombre]", "supprime un nombre de messages défini (disponible seulement avec la permission \"gérer les messages\")")

  msg.channel.send(helpEmbed);
}
