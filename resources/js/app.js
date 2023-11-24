import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    directDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    directRemoveFile: 'Borrar archivo',
    maxFiles: 1,
    uploadMultiple: false,
})
dropzone.on('sending', function (file, xhr, formData) {
    console.log(file);
})
dropzone.on('succes', function (file, response) {
    console.log(response);
})
dropzone.on('error', function (file, message) {
    console.log(message);
})
dropzone.on('removedfile', function () {
    console.log('Archivo eliminado');
})