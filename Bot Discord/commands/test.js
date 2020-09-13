module.exports = (client, msg, args) => {
  msg.channel.send(`msg : ${msg}`);
    msg.channel.send(`args : ${args.join(" ")}`);
      msg.channel.send(`test : ${args.shift()}`);
        msg.channel.send(`test2 : ${args}`);
}
