var form = document.getElementById('request');
          form.addEventListener('submit', e => {
            e.preventDefault();
            fetch(form.action, {
              method: 'POST',
              body : new FormData(document.getElementById("request")),
            }).then(
              response => response.json()    
            ).then((html) => {
              //Js code here 
              window.alert("Message received successfully. Our Authority will Contact You ");
            });
          });