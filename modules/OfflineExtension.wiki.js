//Function to notify the user if he's editing

$('#wpTextbox1').bind('input propertychange', function() {

    //An ajax call is done to server-side page. If the browser is offline, then the connection will fail and,
    //thus, the oneerror event will be called. Otherwise, the onload event is called.


    function isOnline(no, yes) {
        var xhr = XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHttp');
        xhr.onload = function() {
            if (yes instanceof Function) {
                yes();
            }
        }
        xhr.onerror = function() {
            if (no instanceof Function) {
              no();
            }
        }
        xhr.open("HEAD", "WikiEditor.php", true); //We can change the URL to point to any file that exists on server.
        xhr.send();
    }

    isOnline(
        function() {
            alert("Offline and User is editing");
            //Function to alert the user when clicks the preview button when he's offline
            $(function() {
                $("#wpPreview").click(function() {
                  alert('You are offline and clicked Preview');
                });
            });

        },
        function() {
            alert("Online");
        }
    );

});
