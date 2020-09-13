module.exports = (client, msg) => {
  if (msg.author.bot) return;
  if (msg.content.indexOf(client.PREFIX) !== 0) return;
  const args = msg.content.slice(client.PREFIX.length).trim().split(/ +/g);
  const cmd = args.shift().toLowerCase();

  console.log(args);
  console.log(cmd);


  if (client.commands.has(cmd)) client.commands.get(cmd)(client, msg, args);
}
