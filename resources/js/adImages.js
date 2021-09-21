require('./bootstrap');
// hasta la 5.7.2
//window.Dropzone = require('dropzone');

// de la 5.7.4
 document.Dropzone = require('dropzone');

 (function() {
    
    if(document.getElementById("drophere")){
         
    let csrfToken = document.querySelector("meta[name='csrf-token']").getAttribute('content')
    let uniqueSecret = document.querySelector("input[name='uniqueSecret']").getAttribute('value')
    
      let myDropzone = new Dropzone('#drophere', {
            url: '/ad/images/upload',
          params: {
            _token: csrfToken,
            uniqueSecret: uniqueSecret
          },
          addRemoveLinks: true,
        });

        myDropzone.on('success', function (file, response) {
            file.serverId = response.id
        })
        myDropzone.on("removedfile", function (file) {
            fetch('/ad/images/remove', {
                method: 'DELETE', // *GET, POST, PUT, DELETE, etc.
                headers: {
                'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                            _token: csrfToken,
                            uniqueSecret: uniqueSecret,
                            id: file.serverId
                        })
            }) 
        })
       }
    })();
