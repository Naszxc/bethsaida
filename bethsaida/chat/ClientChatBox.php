

											<div id="chat-box" style="height: 90%; width: 100%; background-color: gray;">

												<div id="chats" style="height: 100%; width: 100%; overflow: auto"> <!-- Kailangan ang overflow: hidden dito -->
													<?php
															require 'ChatBox.php';
															require './connect.php';
															$result = $conn->query("select * from chats order by msg_id;");
															while($row = $result->fetch_array()){
																$construct = new chat($row['msg']);
																echo $construct->get_data();
															}
													?>
												</div>

											</div>

											<div style="height: 5%; width: 70%; position: absolute; bottom: 0;">
			
												<input style="height: 80%; width: 80%; float: left;" id="message" type="text" autocomplete="off" placeholder="Aa"/>
												<button style="float: left; height: 100%;" onClick="send(<?= $_GET['id']; ?>)">Send</button>

											</div>



<script>

	window.addEventListener('keypress', e => {if(e.key === 'Enter'){send(<?= $_GET['id']; ?>)}})

	function send(id){
		let url = new URL(window.location)
		let chat_id = url.searchParams.get("id")
		let msg = document.getElementById('message').value;

		$.post('chat/Sendmsg.php', { postmsg: msg, postoutgoing: id , postincoming: 1 },
			function(data){
				$("#chat-box").load(" #chats")
				console.log("success")
				document.getElementById('message').value = '';
			}
		)
	}

	$(document).ready(function(){
		setInterval(function(){
			$("#chat-box").load(" #chats")
		},1000);
	});

</script>