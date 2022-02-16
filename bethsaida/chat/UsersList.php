<html>
<head>
	<?php 
		include 'ChatBox.php'; 
		require 'connect.php';
	?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div style="height: 100%; width: 30%; float: left;">
		
		<?php

			$result = $conn->query("select * from users where bs_id != 1");

					while($row = $result->fetch_array()){ ?>
						<div onClick="select(<?= $row['bs_id']; ?>)" style="height: 10%; width: 100%; background-color: rgba(145, 199, 223, 0.8);">
						    <?php echo $row['bs_fname']; ?>
						</div>
				<?php } 
				
			
		?>
	</div>

	<div id="maindiv" style="height: 100%; width: 70%; float: left; background-color: whitesmoke;">
	
			<div id="chat-box" style="height: 90%; width: 100%;">

				<div id="chats" style="height: 100%; width: 100%; background-color: whitesmoke; overflow: auto"> <!-- Kailangan ang overflow: hidden dito -->
					<?php
						if(isset($_GET['chat_id'])){

							$result = $conn->query("select * from chats order by msg_id;");
							while($row = $result->fetch_array()){
								$construct = new chat($row['msg']);
								echo $construct->get_data();
							}
						}
					?>
				</div>

			</div>

			<div style="height: 5%; width: 70%; position: absolute; bottom: 0; background-color: red;">
			
				<input style="height: 80%; width: 80%; float: left;" id="message" type="text" autocomplete="off" placeholder="Aa"/>
				<button style="float: left;" onClick="send()">Send</button>

			</div>

	</div>
</body>
</html>





<script>

	function select(bs_id){
		window.history.pushState({id: 100}, '', "adminindex.php?chat_id=" + bs_id)
		
		$("#chat-box").load(" #chats")
	}

	window.addEventListener('keypress', e => {if(e.key === 'Enter'){send()}})

	function send(){
		let url = new URL(window.location)
		let chat_id = url.searchParams.get("chat_id")
		let msg = document.getElementById('message').value;

		$.post('chat/Sendmsg.php', { postmsg: msg, postoutgoing: 1, postincoming: chat_id },
			function(data){
				console.log("success")
				$("#chat-box").load(" #chats")
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