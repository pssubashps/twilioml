<html>
	<head>
	<script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>
<script type="text/javascript"
        src="//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js">
</script>
<script type="text/javascript">
    // Set up with TOKEN, a string generated server-side
    Twilio.Device.setup("{TOKEN}");

    Twilio.Device.ready(function() {
        // Could be called multiple times if network drops and comes back.
        // When the TOKEN allows incoming connections, this is called when
        // the incoming channel is open.
    });

    Twilio.Device.offline(function() {
        // Called on network connection lost.
    });

    Twilio.Device.incoming(function(conn) {
        console.log(conn.parameters.From); // who is calling
        conn.status // => "pending"
        conn.accept();
        conn.status // => "connecting"
    });

    Twilio.Device.cancel(function(conn) {
        console.log(conn.parameters.From); // who canceled the call
        conn.status // => "closed"
    });

    Twilio.Device.connect(function (conn) {
        // Called for all new connections
        console.log(conn.status);
    });

    Twilio.Device.disconnect(function (conn) {
        // Called for all disconnections
        console.log(conn.status);
    });

    Twilio.Device.error(function (e) {
        console.log(e.message + " for " + e.connection);
    });

    $(document).ready(function () {
        Twilio.Device.connect({
            agent: "Smith",
            phone_number: "4158675309"
        });
    });

    $("#hangup").click(function() {
        Twilio.Device.disconnectAll();
    });
</script>
		</head>
	<body>
	</body>
</html>