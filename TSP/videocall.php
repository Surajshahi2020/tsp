<body>
    <script>
        var script = document.createElement("script");
        script.type = "text/javascript";
      
        script.addEventListener("load", function (event) {
          const config = {
            name: "Demo User",
            meetingId: "milkyway",
            apiKey: "fa5a3c88-1ad6-489c-af86-bf0bff4bfe3b",
      
            containerId: null,
      
            micEnabled: true,
            webcamEnabled: true,
            participantCanToggleSelfWebcam: true,
            participantCanToggleSelfMic: true,
      
            chatEnabled: true,
            screenShareEnabled: true,
      
            /*
      
           Other Feature Properties
            
            */
          };
      
          const meeting = new VideoSDKMeeting();
          meeting.init(config);
        });
      
        script.src =
          "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.17/rtc-js-prebuilt.js";
        document.getElementsByTagName("head")[0].appendChild(script);
      </script>
      </body>
