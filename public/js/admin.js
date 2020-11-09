
/*---------------------------------------------------------------------------------*/
/*                              JS Button delete New                               */
/*---------------------------------------------------------------------------------*/
let deleteNewButton = document.getElementsByClassName('deleteNew');

for(let i=0;i<deleteNewButton.length;i++) {
    deleteNewButton[i].addEventListener('click', function(event){
        let id = deleteNewButton[i].getAttribute('id').substr(-1);
        htmlValidationDeleteNew(id);
    });
}

function validationDeleteNew(id){
    window.location = 'index.php?action=deleteNew&id=' + id ;
}

function htmlValidationDeleteNew(id){
    let html = document.createElement('div');
    html.setAttribute('id', 'modal');
    html.innerHTML = '<div id="modal-box"><p>Delete this new ?</p><div><button onclick="validationDeleteNew('+id+')" class="edit-button" id="modal-yes">Yes</button><button id="modal-no" onclick="deleteModal()" class="delete-button">No</button></div>';
    document.querySelector('body').appendChild(html);
}

/*---------------------------------------------------------------------------------*/
/*                        JS function delete modal element                         */
/*---------------------------------------------------------------------------------*/
function deleteModal(){
    document.getElementById('modal').remove();
}

/*---------------------------------------------------------------------------------*/
/*                              JS Button edit New                                 */
/*---------------------------------------------------------------------------------*/
let editNewButton = document.getElementsByClassName('editNew');

for(let i=0;i<editNewButton.length;i++) {
    editNewButton[i].addEventListener('click', function(event){
        let id = editNewButton[i].getAttribute('id').substr(-1);
        window.location = 'index.php?action=editNew&id=' + id ;
    });
}

/*---------------------------------------------------------------------------------*/
/*                           JS function button add new                            */
/*---------------------------------------------------------------------------------*/
function addNew(){
    window.location = 'index.php?action=editNew&id=0';
}

/*---------------------------------------------------------------------------------*/
/*                         JS function button add artworks                         */
/*---------------------------------------------------------------------------------*/
function addArtwork(){
    window.location = 'index.php?action=editArtwork&id=0';
}

/*---------------------------------------------------------------------------------*/
/*                            JS Button edit artworks                              */
/*---------------------------------------------------------------------------------*/
let editArtworkButton = document.getElementsByClassName('editArtwork');

for(let i=0;i<editArtworkButton.length;i++) {
    editArtworkButton[i].addEventListener('click', function(event){
        let id = editArtworkButton[i].getAttribute('id').substr(-1);
        window.location = 'index.php?action=editArtwork&id=' + id ;
    });
}

/*---------------------------------------------------------------------------------*/
/*                              JS Button delete New                               */
/*---------------------------------------------------------------------------------*/
let deleteArtworkButton = document.getElementsByClassName('deleteArtwork');

for(let i=0;i<deleteArtworkButton.length;i++) {
    deleteArtworkButton[i].addEventListener('click', function(event){
        let id = deleteArtworkButton[i].getAttribute('id').substr(-1);
        htmlValidationDeleteArtwork(id);
    });
}

function validationDeleteArtwork(id){
    window.location = 'index.php?action=deleteArtwork&id=' + id ;
}

function htmlValidationDeleteArtwork(id){
    let html = document.createElement('div');
    html.setAttribute('id', 'modal');
    html.innerHTML = '<div id="modal-box"><p>Delete this artwork ?</p><div><button onclick="validationDeleteArtwork('+id+')" class="edit-button" id="modal-yes">Yes</button><button id="modal-no" onclick="deleteModal()" class="delete-button">No</button></div>';
    document.querySelector('body').appendChild(html);
}

/*---------------------------------------------------------------------------------*/
/*                              JS Button delete New                               */
/*---------------------------------------------------------------------------------*/
let deleteMusicButton = document.getElementsByClassName('deleteMusic');

for(let i=0;i<deleteMusicButton.length;i++) {
    deleteMusicButton[i].addEventListener('click', function(event){
        let id = deleteMusicButton[i].getAttribute('id').substr(-1);
        htmlValidationDeleteMusic(id);
    });
}

function validationDeleteMusic(id){
    window.location = 'index.php?action=deleteMusic&id=' + id ;
}

function htmlValidationDeleteMusic(id){
    let html = document.createElement('div');
    html.setAttribute('id', 'modal');
    html.innerHTML = '<div id="modal-box"><p>Delete this music ?</p><div><button onclick="validationDeleteMusic('+id+')" class="edit-button" id="modal-yes">Yes</button><button id="modal-no" onclick="deleteModal()" class="delete-button">No</button></div>';
    document.querySelector('body').appendChild(html);
}

/*---------------------------------------------------------------------------------*/
/*                          JS function button add musics                          */
/*---------------------------------------------------------------------------------*/
function addMusic(){
    window.location = 'index.php?action=editMusic&id=0';
}

/*---------------------------------------------------------------------------------*/
/*                            JS Button edit artworks                              */
/*---------------------------------------------------------------------------------*/
let editMusicButton = document.getElementsByClassName('editMusic');

for(let i=0;i<editMusicButton.length;i++) {
    editMusicButton[i].addEventListener('click', function(event){
        let id = editMusicButton[i].getAttribute('id').substr(-1);
        window.location = 'index.php?action=editMusic&id=' + id ;
    });
}